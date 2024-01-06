<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', 
  function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/get',[Mahasiswa::class,
'getController']); 


// buat route untuk pencarian
Route::get('/mahasiswa/search/{keyword}',[Mahasiswa::class,
'searchController']); 
// route untuk detail data
Route::get('/mahasiswa/detail/{id}',[Mahasiswa::class,
'detailController']);

// route untuk hapus data
Route::delete('/mahasiswa/delete/{id}',[Mahasiswa::class,
'deleteController']);

//route untuk simpan data
route::post('/mahasiswa/save',[Mahasiswa::class,
'saveController']);

//route untuk ubah data
route::put('/mahasiswa/update/{id}',[Mahasiswa::class,
'updateController']);