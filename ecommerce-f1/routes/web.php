<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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
    return view('welcome');
});
Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get("/produto/create", [ProdutoController::class, "create"]);
Route::get('/produto/{produto}',[ProdutoController::class,'show']);//aqui , no servidor, 
Route::post("/produto/create", [ProdutoController::class, "store"]);
Route::get("/produto/{produto}/edit", [ProdutoController::class, "edit"]);
Route::post("/produto/{produto}/edit", [ProdutoController::class, "update"]);
Route::post("/produto/{produto}/destroy", [ProdutoController::class, "destroy"]);
//será produto/1
