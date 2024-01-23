<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ssiswa extends Model
{
   //use HasFactory;
   function getData()
   {
    $query = DB::table('tb_siswa')
            ->select("id AS id_siswa","nama AS nama_siswa","email","telepon AS number_phone")
            ->orderBy("id")
            ->get();

    return $query;
   }

   function searchData($keyword)
   {
    // tampilkan data dari "tb_siswa"
    $query = DB::table('tb_siswa')
            ->select("id AS id_siswa", "nis AS nis_siswa","nama AS nama_siswa","email","telepon AS number_phone")
            ->where("id","$keyword")
            //->orWhereRaw("REPLACE(nama,' ','') LIKE REPLACE('%$keyword%',' ','')")
            //->orWhere("nama","LIKE","%$keyword%")
            ->orWhere(DB::raw("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("telepon","LIKE","$keyword")
            ->orWhere("email","LIKE","%$keyword%")
            ->orderBy("id")
            ->get();
    
    // mengirim hasil variabel "query" ke controller "siswa"
    return $query;
   }

   // funsi detail data
   function detailData($id)
   {
         // tampilkan data dari "tb_siswa"
    $query = DB::table('tb_siswa')
    ->select("id AS id_siswa", "nis AS nis_siswa","nama AS nama_siswa","email","telepon AS number_phone")
    ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
    ->get();

// mengirim hasil variabel "query" ke controller "siswa"
return $query;
   }
}