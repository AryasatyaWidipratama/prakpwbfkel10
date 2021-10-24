<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\BencanaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});


Route::get('kecamatan',[KecamatanController::class,'kecamatan']);

Route::get('bencana',[BencanaController::class,'bencana']);

Route::get('kategori',[KategoriController::class,'kategori']);

Route::get('kota',[KotaController::class,'kota']);

Route::get('detail',[DetailController::class,'detail']);

Route::get('pelaporan',[PelaporanController::class,'pelaporan']);


Route::get('provinsi',[ProvinsiController::class,'provinsi']);

Route::get('role',[RoleController::class,'role']);

//Route::get('user role',[UserroleController::class,'usrrole']);

Route::get('user',[UserController::class,'user']);
Route::get('user/tambahuser',[UserController::class,'useradd']);
Route::post('user/store',[UserController::class,'userstore']);
Route::get('user/edit/{id}',[UserController::class,'useredit']);
Route::post('user/update/{id}',[UserController::class,'userupdate']);