<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecController;
use App\Http\Controllers\BController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\ProvController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});


Route::get('kecamatan',[KecamatanController::class,'index']);
Route::get('bencana',[BencanaController::class,'bencana']);
Route::get('kategori',[KategoriController::class,'kategori']);
Route::get('kota',[KotaController::class,'kota']);
Route::get('detail',[DetailController::class,'detail']);
Route::get('pelaporan',[PelaporanController::class,'pelaporan']);
Route::get('provinsi',[ProvinsiController::class,'prov']);
Route::get('role',[RoleController::class,'role']);
Route::get('user role',[UserroleController::class,'usrrole']);

Route::get('user',[UserController::class,'user']);

