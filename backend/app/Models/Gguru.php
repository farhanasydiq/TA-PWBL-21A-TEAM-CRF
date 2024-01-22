<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gguru extends Model
{
    function getData()
    {
        $query = DB::table('tb_guru')
                ->select("id AS id_guru", "nama AS nama_guru", "email AS email_guru", "telepon AS number_phone")
                ->orderBy("id")
                ->get();

        return $query;
    }
}