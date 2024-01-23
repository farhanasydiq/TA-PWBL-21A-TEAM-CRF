<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gguru extends Model
{
   //use HasFactory;
   function getData()
   {
    $query = DB::table('tb_guru')
            ->select("id AS id_guru","nama AS nama_guru","email as email_guru","telfon AS number_phone","status AS status_guru")
            ->orderBy("id")
            ->get();

    return $query;
   }

   function searchData($keyword)
   {
    // tampilkan data dari "tb_guru"
    $query = DB::table('tb_guru')
            ->select("id AS id_guru","nama AS nama_guru","email as email_guru","telfon AS number_phone","status AS status_guru")
            ->where("id","$keyword")
            //->orWhereRaw("REPLACE(nama,' ','') LIKE REPLACE('%$keyword%',' ','')")
            //->orWhere("nama","LIKE","%$keyword%")
            ->orWhere(DB::raw("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("telfon","LIKE","$keyword")
            ->orWhere("email","LIKE","%$keyword%")
            ->orWhere("status","LIKE","%$keyword%")
            ->orderBy("id")
            ->get();
    
    // mengirim hasil variabel "query" ke controller "Guru"
    return $query;
   }

   // funsi detail data
   function detailData($id)
   {
         // tampilkan data dari "tb_guru"
    $query = DB::table('tb_guru')
    ->select("id AS id_guru","nama AS nama_guru","email as email_guru","telfon AS number_phone","status AS status_guru")
    ->where(DB::raw("TO_BASE64(MD5(id))"),"$id")
    ->get();

// mengirim hasil variabel "query" ke controller "Guru"
return $query;
   }

   // buat fungsi untuk simpan data
   function saveData($id,$nama,$email,$telfon,$status)
   {
       //ambil data
       $result = [
           "id" => $id,
           "nama" => $nama,
           "email" => $email,
           "status" => $status,
           "telfon" => $telfon,
       ];
       // perintah simpan data
       DB::table("tb_guru")
           ->insert($result);
   }
   function checkUpdateData($npm,$id)
   {
       $query = DB::table('tb_guru')
       ->select("id as id_guru","nama as nama_ guru","email as email_guru","telfon as number_phone",
       "status as status_guru")
       // ->where(DB::raw("TO_BASE64(MD5(id))"),"$id")
       ->where(DB::raw("TO_BASE64(MD5(id))"), "!=", "$id")
       ->where("id", "$id")
       ->get();

   // mengirim hasil variabel "query" ke controller "guru"
   return $query;
   }

       //fungsi ubah data 
       function updateData ($id, $nama, $email, $telfon, $status)
       {
             //ambil data
             $result = [
               "id" => $id,
               "nama" => $nama,
               "email" => $email,
               "status" => $status,
               "telfon" => $telfon,
           ];
   
           // perintah untuk ubah data
           DB::table("tb_guru")
           ->where(DB::raw("TO_BASE64(MD5(id))"),"$id")
           ->update($result);
       }

}