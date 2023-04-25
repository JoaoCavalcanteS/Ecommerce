<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
//PRODUTO
Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get("/produto/create", [ProdutoController::class, "create"]);
Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor,
Route::post("/produto/create", [ProdutoController::class, "store"]);
Route::get("/produto/{produto}/edit", [ProdutoController::class, "edit"]);
Route::post("/produto/{produto}/edit", [ProdutoController::class, "update"]);
Route::post("/produto/{produto}/destroy", [ProdutoController::class, "destroy"]);

//USUARIOS
Route::get('/usuario',[UsuarioController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get("/usuario/create", [UsuarioController::class, "create"]);
Route::get('/usuario/{user}',[UsuarioController::class,'show'])->name('usuario.show');//aqui , no servidor,
Route::post("/usuario/create", [UsuarioController::class, "store"]);
Route::get("/usuario/{user}/edit", [UsuarioController::class, "edit"]);
Route::post("/usuario/{user}/edit", [UsuarioController::class, "update"]);
Route::post("/usuario/{user}/destroy", [UsuarioController::class, "destroy"]);
