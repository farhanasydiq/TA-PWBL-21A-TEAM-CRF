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

        // kembalikan nilai variabel 'result' ke dalam object 'siswa'
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
            $message = "Data Gagal Dihapus ! (NIS TIDAK DITEMUKAN !)";
        }

        return response(["status" => $status, "message" => $message], http_response_code());
   }

   // buat fungsi untuk simpan data
   function saveController(Request $reg)
   {
        // ambil data input
        // "nis" : variabel array yang menampung nilai dari $reg
        // $reg->nis : variabel yang dikirim dari front end
        $data = [
            "nis" => $reg->nis,
            "nama" => $reg->nama,
            "kelas" => $reg->kelas,
            "telepon" => $reg->telepon
            //"id" => base64_encode (md5($reg->nis))
        
        ];

        $id = base64_encode(md5($reg->nis));
        // lakukan mengecekan apakah data nis yg diisi sudah pernah tersimpan/belum di database
        
        // Jika data tersedia
        //if(count($this->model->detailData($data[4])) == 1), untuk data di dalam
        if(count($this->model->detailData($id)) == 1)
        {
            // buat status dan pesan
        $status = 0;
        $message = "Data Gagal Disimpan ! (nis Sudah Ada !)";
        }
        // jika data tidak tersedia
        else
        {
            // lakukan penyimpanan data
            $this->model->saveData($data["nis"],$data["nama"],$data["kelas"],$data["telepon"]);
            // buat status dan pesan
            $status = 1;
            $message = "Data Berhasil Disimpan";
        }
        return response(["status" => $status, "message" => $message], http_response_code());
   }

   // buat fungsi ubah data
   function updateController(Request $reg, $id)
   {
        // ambil data input
        $data = [
            "nis" => $reg->nis,
            "nama" => $reg->nama,
            "kelas" => $reg->kelas,
            "telepon" => $reg->telepon
        
        ];

        // set nilai id
        // $id = base64_encode(md5($reg->nis));

        // Jika data tersedia, lakukan perubahan data
        if(count($this->model->checkUpdateData($data["nis"], $id)) == 0)
        {
             

            // buat status dan pesan
        $status = 1;
        $message = "Data Berhasil Diubah";
        }
        // jika data tidak tersedia
        else
        {
            // lakukan penyimpanan data
            $this->model->saveData($data["nis"],$data["nama"],$data["kelas"],$data["telepon"], $id);
            // buat status dan pesan
            $status = 0;
            $message = "Data Gagal Diubah ! (nis Tidak Ditemukan !)";
        }
        return response(["status" => $status, "message" => $message], http_response_code());

   }
}
