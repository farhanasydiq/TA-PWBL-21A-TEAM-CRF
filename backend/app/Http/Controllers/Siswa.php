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

}