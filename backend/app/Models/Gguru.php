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
            ->select("id AS id_guru","nama AS nama_guru","email","telepon AS number_phone")
            ->orderBy("id")
            ->get();

    return $query;
   }

   function searchData($keyword)
   {
    // tampilkan data dari "tb_guru"
    $query = DB::table('tb_guru')
            ->select("id AS id_guru","nama AS nama_guru","email","telepon AS number_phone")
            ->where("id","$keyword")
            //->orWhereRaw("REPLACE(nama,' ','') LIKE REPLACE('%$keyword%',' ','')")
            //->orWhere("nama","LIKE","%$keyword%")
            ->orWhere(DB::raw("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("telepon","LIKE","$keyword")
            ->orWhere("email","LIKE","%$keyword%")
            ->orderBy("id")
            ->get();
    
    // mengirim hasil variabel "query" ke controller "Guru"
    return $query;
   }

   // funsi detail data
   function detailData($id)
   {
         // tampilkan data dari "tb_mahasiswa"
    $query = DB::table('tb_guru')
    ->select("id AS id_guru","nama AS nama_guru","email","telepon AS number_phone")
    ->where(DB::raw("TO_BASE64(MD5(id))"),"$id")
    ->get();

// mengirim hasil variabel "query" ke controller "Guru"
return $query;
   }
}