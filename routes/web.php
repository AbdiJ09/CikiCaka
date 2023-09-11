<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('profil',[
        "title" => "profil"
    ]);
});
Route::get('/product',[ProductController::class,'index']);
Route::get('/bukutamu',[BukuTamuController::class,'show']);
Route::get('/bukutamu/add',[BukuTamuController::class,'create']);
Route::post('/bukutamu/store',[BukuTamuController::class,'store']);
Route::get('/bukutamu/{id}/delete',[BukuTamuController::class,'destroy']);
Route::get('/bukutamu/update/{id}',[BukuTamuController::class,'edit']);
Route::post('/bukutamu/{id}/edit',[BukuTamuController::class,'update']);