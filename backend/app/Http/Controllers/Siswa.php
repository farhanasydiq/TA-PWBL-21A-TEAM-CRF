<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ssiswa;

class Siswa extends Controller
{
    // buat variabel
    Protected $model;

    // buat fungsi global
    function __construct()
    {
        // inisialisasi variabel 'model' dari model 'Siswa'
        $this->model = new Ssiswa();
    }

    function getController()
    {
        // isi nilai variabel 'result' dari fungsi 'getData' dari model "Ssiswa"
        $result = $this->model->getData();

        // kembalikan nilai variabel 'result' ke dalam object 'siswa'
        return response(["Siswa" => $result], http_response_code());
    }

     // buat fungsi pencarian data
     function searchController($keyword)
     {
         // isi nilai variabel 'result' dari fungsi 'searchData' dari model "keyword"
         $result = $this->model->searchData($keyword);
 
         // kembalikan nilai variabel 'result' ke dalam object 'Siswa'
         return response(["Siswa" => $result], http_response_code());
     }
 
     // buat fungsi detail data
    function detailController($id)
    {
         // isi nilai variabel 'result' dari fungsi 'detailData' dari model "keyword"
         $result = $this->model->detailData($id);
 
         // kembalikan nilai variabel 'result' ke dalam object 'mahasiswa'
         return response(["Siswa" => $result], http_response_code());    
    }

       // buat fungsi untuk hapus data
   function deleteController($id)
   {
        // cek apakah nis tersedia/tidak
        // jika data tersedia
        if(count($this->model->detailData($id)) == 1)
        {   
            // 
            $this->model->deleteData($id);

            $status = 1;
            $message = "Data Berhasil Dihapus";
        }

        // jika data tidak tersedia
        else
        {
            // buat status dan pesan
            $status = 0;
            $message = "Data Gagal Dihapus ! (id TIDAK DITEMUKAN !)";
        }
        return response(["status" => $status, "message" => $message], http_response_code());
    }    

        // buat fungsi untuk simpan data 
    function saveController(Request $req)
    {
        // ambil data
        // "nis" = variabel array yang menampung nilai dari $req
        // "$req->nis" = variabel yang dikirim dari front end
        $data = [
            "nis" => $req->nis,
            "nama" => $req->nama,
            "email" => $req->email,
            "telfon" => $req->telfon,
            // "id" => base64_encode(md5($req->npm));
        ];
        
        $id = base64_encode(md5($req->nis));

        // lakukan pengecekan apakah data "npm" yang diisi sudah pernah tersimpan/belum di database
        // jika data tersedia
        if(count($this->model->detailData($id)) == 1)
        {
            
            // buat status dan pesan
            $status = 0;
            $message = "Data Gagal Tersimpan NPM Sudah Ada";
        }
        // jika data tidak tersedia
        else
        {
            $this->model->saveData($data["nis"],$data["nama"],$data["email"],$data["telfon"]);
            // buat status dan pesan
            $status = 1;
            $message = "Data Berhasil Disimpan";
        }
        // Kembalikan nilai variabel "result" ke dalam object "siswa"
        return response(["status" => [$status],"message" => $message], http_response_code());
    }

    // buat fungsi untuk ubah data
    function updateController(Request $req, $id)
    {
        // ambil data input
        $data = [
            "nis" => $req->nis,
            "nama" => $req->nama,
            "email" => $req->email,
            "telfon" => $req->telfon
       
        ];
        // set nilai id
        // $id = base64_encode(md5($req->nis));

        // lakukan pengecekan apakah data "nis" yang diisi sudah pernah tersimpan/belum di database
        if(count($this->model->checkUpdateData($data["nis"], $id)) == 0)
        {
            // lakukan perubahan data 
            // panggilan fungsi updateData dari model "siswa"
            $this->model->updateData($data
            ["nis"],$data["nama"],$data
            ["email"],$data["telfon"],
            $id);

            $status = 1;
            $message = "Data Berhasil Diubah";
        }
        // jika data tidak tersedia
        else
        {
            $status = 0;
            $message = "Data Gagal Diubah (nis tidak ditemukan)";
        }
        return response(["status" => $status, "message" => $message], http_response_code());
  }
}