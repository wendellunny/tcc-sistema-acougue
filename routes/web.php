<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\PontoDeVendaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[PontoDeVendaController::class,'index'])->name('ponto-de-venda.index');

Route::resource('produtos',ProdutoController::class);
Route::resource('fornecedores',FornecedorController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('funcionarios',FuncionarioController::class);
Route::resource('historico',HistoricoController::class);