<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mmahasiswa extends Model
{
    //use HasFactory;

    // Buat fungsi untuk ambil data "tb_guru"
    function getData()
    {
        // tampilkan data dari "tb_guru"
        $query = DB::table('tb_guru')
                ->select("id_user as id_user ","nama as nama_guru","email as email_guru","pa as pa_guru",
                "status as status_guru")
                ->orderBy("id_user")
                ->get();

            // kembalikan nilai variabel "query" ke controller "Mahasiswa"
            return $query;
    }
    // buat fungsi untuk pencarian data
    function searchData($keyword)
    {
    // tampilkan data dari "tb_guru"
    $query = DB::table('tb_guru')
            ->select("id_user as id_user","nama as nama_guru","email as emaiL_guru","pa as pa_guru",
            "status as status_guru")
            ->where("npm","$keyword")
            // ->orWhere("nama","LIKE","%$keyword%")
            // ->orWhereRaw("REPLACE(nama,' ','') LIKE REPLACE('%$keyword%',' ','')")
            ->orWhere(DB::RAW("REPLACE(nama,' ','')"),"LIKE",DB::raw("REPLACE('%$keyword%',' ','')"))
            ->orWhere("email","$keyword")
            ->orWhere("status","LIKE","%$keyword%")
            ->orderBy("id_user")
            ->get();

        // mengirim hasil variabel "query" ke controller "guru"
        return $query;
    }
}