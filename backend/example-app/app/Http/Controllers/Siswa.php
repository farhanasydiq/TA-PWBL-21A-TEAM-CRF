<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ssiswa;

class Siswa extends Controller
{
    
    Protected $model;

    
    function __construct()
    {
        
        $this->model = new Ssiswa();
    }

    function getController()
    {
        
        $result = $this->model->getData();

        
        return response(["Siswa" => $result], http_response_code());
    }

    
    function searchController($keyword)
    {
        
        $result = $this->model->searchData($keyword);

        
        return response(["Siswa" => $result], http_response_code());
    }

    
   function detailController($id)
   {
        
        $result = $this->model->detailData($id);

        
        return response(["Siswa" => $result], http_response_code());    
   }

   
   function deleteController($id)
   {
        
        if(count($this->model->detailData($id)) == 1)
        {   
            // 
            $this->model->deleteData($id);

            $status = 1;
            $message = "Data Berhasil Dihapus";
        }

        
        else
        {
            
            $status = 0;
            $message = "Data Gagal Dihapus ! (NIS TIDAK DITEMUKAN !)";
        }

        return response(["status" => $status, "message" => $message], http_response_code());
   }

   
   function saveController(Request $reg)
   {
        
        $data = [
            "nis" => $reg->nis,
            "nama" => $reg->nama,
            "kelas" => $reg->kelas,
            "telepon" => $reg->telepon
            
        
        ];

        $id = base64_encode(md5($reg->nis));
        if(count($this->model->detailData($id)) == 1)
        {
            
        $status = 0;
        $message = "Data Gagal Disimpan ! (NIS Sudah Ada !)";
        }
       
        else
        {
            
            $this->model->saveData($data["nis"],$data["nama"],$data["kelas"],$data["telepon"]);
            
            $status = 1;
            $message = "Data Berhasil Disimpan";
        }
        return response(["status" => $status, "message" => $message], http_response_code());
   }

   
   function updateController(Request $reg, $id)
   {
        
        $data = [
            "nis" => $reg->nis,
            "nama" => $reg->nama,
            "kelas" => $reg->kelas,
            "telepon" => $reg->telepon
        
        ];

       
        if(count($this->model->checkUpdateData($data["nis"], $id)) == 0)
        {
             

            
        $status = 1;
        $message = "Data Berhasil Diubah";
        }
        
        else
        {
           
            $this->model->saveData($data["nis"],$data["nama"],$data["kelas"],$data["telepon"], $id);
            
            $status = 0;
            $message = "Data Gagal Diubah ! (NIS Tidak Ditemukan !)";
        }
        return response(["status" => $status, "message" => $message], http_response_code());

   }
}
