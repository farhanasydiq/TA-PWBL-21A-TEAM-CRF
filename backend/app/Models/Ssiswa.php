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
            ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas AS prodi","telepon AS number_phone")
            ->orderBy("id")
            ->get();

    return $query;
   }

   // 
   function searchData($keyword)
   {
    // tampilkan data dari "tb_siswa"
    $query = DB::table('tb_siswa')
            ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas AS prodi","telepon AS number_phone")
            ->where("nis","$keyword")
            //->orWhereRaw("REPLACE(nama,' ','') LIKE REPLACE('%$keyword%',' ','')")
            //->orWhere("nama","LIKE","%$keyword%")
            ->orWhere(DB::raw("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("telepon","LIKE","$keyword")
            ->orWhere("kelas","LIKE","%$keyword%")
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
    ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas AS prodi","telepon AS number_phone")
    ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
    ->get();

// mengirim hasil variabel "query" ke controller "siswa"
return $query;
   }

   // buat fungsi untuk hapus data
   function deleteData($id)
   {
        // perintah untuk hapus data
        DB::table("tb_siswa")
        ->where(DB::raw("TO_BASE64(MD5(nis))"),"$id")
        ->delete();
   }

   // buat fungsi buat save data
   function saveData($nis,$nama,$kelas,$telepon)
   {
        // ambil data
        // nis = nama field
        // $nis = nama parameter
        $result = [
            "nis" => $nis,
            "nama" => $nama,
            "kelas" => $kelas,
            "telepon" => $telepon,
        ];

        // perintah simpan data
        DB::table("tb_siswa")
        ->insert($result);
   }

   function checkUpdateData($nis, $id)
   {
          // tampilkan data dari "tb_siswa"
          $query = DB::table('tb_siswa')
          ->select("id AS id_siswa","nama AS nama_siswa","nis AS nis_siswa","kelas AS prodi","telepon AS number_phone")
          ->where(DB::raw("TO_BASE64(MD5(nis))"), "!=","$id")
          ->where("nis", "$nis")
          ->get();

          // mengirim hasil variabel "query" ke controller "siswa"
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
