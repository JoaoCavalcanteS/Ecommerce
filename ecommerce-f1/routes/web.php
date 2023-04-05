<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor, será produto/1
