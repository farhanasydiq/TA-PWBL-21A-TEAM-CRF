<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/guru/get',[Guru::class,
'getController']);
Route::get('/siswa/get', [Siswa::class,'getController']);

// buat route untuk pencarian
Route::get('/guru/search/{keyword}',[Guru::class,
'searchController']);
Route::get('/siswa/search/{keyword}',[Siswa::class,
'searchController']); 

// route untuk detail data
Route::get('/guru/detail/{id}',[Guru::class,
'detailController']);
Route::get('/siswa/detail/{id}',[Siswa::class,
'detailController']);