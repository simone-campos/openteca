<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/livros/meus', function () {
    return view('subir livros');
});

Route::get('/livros/pesquisa', function () {
    return view('editar');
});

Route::get('/info-livro', function () {
    return view('excluir');
});

Route::get('/minha conta', function () {
    return view('editar a bio');
});

Route::get('/minha conta', function () {
    return view('nome');
});

Route::get('/minha-conta', function () {
    return view('minha-conta');
});

Route::get('/minha conta', function () {
    return view('alterar e-mail');
});

Route::get('/minha conta', function () {
    return view('excluir conta');
});

