<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    // buat variabel
    protected $model;

    //buat fungsi global
    function __construct()
    {
        // inisialisasi variabel "model" dari model "guru"
        $this->model = new guru();
    }
    function getController()
    {
        // isi nilai variabel "result" dari fungsi "getData" dari model "Mmahasiswa"
        $result = $this->model->getData();
        
        // kembalikan nilai variabel "result" ke dalam object "guru"
        return response(["guru" => $result], http_response_code());
    }

    // buat fungsi pencarian data
    function searchController($keyword)
    {
        // isi nilai variabel "result" dari fungsi "searchData" dari model "Mmahasiswa" sesuai dengan isi parameter "keyword"
        $result = $this->model->searchData($keyword);

        return response(["mahasiswa" => $result],http_response_code());
    }

    // buat fungsi untuk detail data
    function detailController ($id)
    {
        // isi nilai variabel "result" dari fungsi "searchData" dari model "Mmahasiswa" sesuai dengan isi parameter "keyword"
        $result = $this->model->detailData($id);

        return response(["mahasiswa" => $result],http_response_code());
    }

    // buat fungsi untuk menghapus data
    function deleteController($id)
    {
        //cek apakah npm tersedia/tidak
        // jika data tersedia
        if(count($this->model->detailData($id)) == 1)
        {
            // lakukan penghapusan data (panggil fungsi "deleteData" dari Mmahasiswa)
            $this->model->deleteData($id);
            // buat status dan pesan
            $status = 1;
            $message = "Data Berhasil Dihapus";
        }

        // jika data tidak tersedia
        else
        {
            // buat status dan pesan
            $status = 0;
            $message = "Data Gagal Dihapus (NPM tidak ditemukan!)";
        }

        // Kembalikan nilai variabel "result" ke dalam object "mahasiswa"
        return response(["status" => [$status],"message" => $message], http_response_code());
    }

    // buat fungsi untuk simpan data 
    function saveController(Request $req)
    {
        // ambil data
        // "npm" = variabel array yang menampung nilai dari $req
        // "$req->npm" = variabel yang dikirim dari front end
        $data = [
            "npm" => $req->npm,
            "nama" => $req->nama,
            "telepon" => $req->telepon,
            "jurusan" => $req->jurusan,
            // "id" => base64_encode(md5($req->npm));
        ];
        
        $id = base64_encode(md5($req->npm));

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
            $this->model->saveData($data["npm"],$data["nama"],$data["telepon"],$data["jurusan"]);
            // buat status dan pesan
            $status = 1;
            $message = "Data Berhasil Disimpan";
        }
        // Kembalikan nilai variabel "result" ke dalam object "mahasiswa"
        return response(["status" => [$status],"message" => $message], http_response_code());
    }

    // buat fungsi untuk ubah data
    function updateController(Request $req, $id)
    {
        // ambil data input
        $data = [
            "npm" => $req->npm,
            "nama" => $req->nama,
            "telepon" => $req->telepon,
            "jurusan" => $req->jurusan
       
        ];
        // set nilai id
        // $id = base64_encode(md5($req->npm));

        // lakukan pengecekan apakah data "npm" yang diisi sudah pernah tersimpan/belum di database
        if(count($this->model->checkUpdateData($data["npm"], $id)) == 0)
        {
            // lakukan perubahan data 
            // panggilan fungsi updateData dari model "mahasiswa"
            $this->model->updateData($data
            ["npm"],$data["nama"],$data
            ["telepon"],$data["jurusan"],
            $id);

            $status = 1;
            $message = "Data Berhasil Diubah";
        }
        // jika data tidak tersedia
        else
        {
            $status = 0;
            $message = "Data Gagal Diubah (NPM tidak ditemukan)";
        }
        // Kembalikan nilai variabel "result" ke dalam object "mahasiswa"
        return response(["status" => [$status],"message" => $message], http_response_code());   
    }
}