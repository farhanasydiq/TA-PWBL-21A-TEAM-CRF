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

Route::get('/siswa/get',[Siswa::class,
'getController']); 


// buat route untuk pencarian
Route::get('/siswa/search/{keyword}',[Siswa::class,
'searchController']); 
// route untuk detail data
Route::get('/siswa/detail/{id}',[Siswa::class,
'detailController']);

// route untuk hapus data
Route::delete('/siswa/delete/{id}',[Siswa::class,
'deleteController']);

//route untuk simpan data
route::post('/siswa/save',[Siswa::class,
'saveController']);

//route untuk ubah data
route::put('/siswa/update/{id}',[Siswa::class,
'updateController']);