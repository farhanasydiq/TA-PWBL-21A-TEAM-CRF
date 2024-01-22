<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gguru;

class Guru extends Controller
{
    // buat variabel
    Protected $model;

    // buat fungsi global
    function __construct()
    {
        // inisialisasi variabel 'model' dari model 'guru'
        $this->model = new Gguru();
    }

    function getController()
    {
        // isi nilai variabel 'result' dari fungsi 'getData' dari model "Gguru"
        $result = $this->model->getData();

        // kembalikan nilai variabel 'result' ke dalam object 'guru'
        return response(["Guru" => $result], http_response_code());
    }
}