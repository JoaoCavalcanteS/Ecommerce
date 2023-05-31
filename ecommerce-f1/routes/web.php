<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class,'index']);

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
Route::get('/usuario/{usuario}',[UsuarioController::class,'show']);//aqui , no servidor,
Route::post("/usuario/create", [UsuarioController::class, "store"]);
Route::get("/usuario/{usuario}/edit", [UsuarioController::class, "edit"]);
Route::post("/usuario/{usuario}/edit", [UsuarioController::class, "update"]);
Route::post("/usuario/{usuario}/destroy", [UsuarioController::class, "destroy"]);
Route::get("/usuario/login", [UsuarioController::class, "login"]);

//ENDEREÇO
Route::get('/endereco',[EnderecoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get("/endereco/create", [EnderecoController::class, "create"]);
Route::get('/endereco/{endereco}',[EnderecoController::class,'show']);//aqui , no servidor,
Route::post("/endereco/create", [EnderecoController::class, "store"]);
Route::get("/endereco/{endereco}/edit", [EnderecoController::class, "edit"]);
Route::post("/endereco/{endereco}/edit", [EnderecoController::class, "update"]);
Route::post("/endereco/{endereco}/destroy", [EnderecoController::class, "destroy"]);

Route::get("/user/login", [LoginController::class, "telaLogin"])->name('login');
Route::post("login", [LoginController::class, "login"]);
Route::post("logout", [LoginController::class, "logout"])->name("logout");
