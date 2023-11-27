<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
   
   function getData()
   {
    $query = DB::table('tb_siswa')
            ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas","telepon AS number_phone")
            ->orderBy("id")
            ->get();

    return $query;
   }

   // 
   function searchData($keyword)
   {
    $query = DB::table('tb_mahasiswa')
            ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas","telepon AS number_phone")
            ->where("nis","$keyword")
            ->orWhere(DB::raw("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("telepon","LIKE","$keyword")
            ->orWhere("kelas","LIKE","%$keyword%")
            ->orderBy("id")
            ->get();
    
    
    return $query;
   }

   // funsi detail data
   function detailData($id)
   {
         
    $query = DB::table('tb_siswa')
    ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas","telepon AS number_phone")
    ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
    ->get();


return $query;
   }

   
   function deleteData($id)
   {
        
        DB::table("tb_siswa")
        ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
        ->delete();
   }

   // buat fungsi buat save data
   function saveData($nis,$nama,$kelas,$telepon)
   {
        
        $result = [
            "nis" => $nis,
            "nama" => $nama,
            "kelas" => $kelas,
            "telepon" => $telepon,
        ];

   
        DB::table("tb_siswa")
        ->insert($result);
   }

   function checkUpdateData($nis, $id)
   {
          // tampilkan data dari "tb_mahasiswa"
          $query = DB::table('tb_mahasiswa')
          ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas","telepon AS number_phone")
          ->where(DB::raw("TO_BASE64(MD5(nis))"), "!=","$id")
          ->where("nis", "$nis")
          ->get();

          
          return $query;
   }

   function updateData($nis, $nama, $kelas, $telepon, $id)
   {
     $result = [
          "nis" => $nis,
          "nama" => $nama,
          "kelas" => $kelas,
          "telepon" => $telepon,
      ];

      DB::table("tb_siswa")
      ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
      ->update($result);
   }
}