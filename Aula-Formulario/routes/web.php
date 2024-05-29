<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/dados', function () {
    return view('dados');
});


use App\Http\Controllers\contatocontroller;
Route::post('/cadastrar', [contatocontroller::class, 'cadastrar']);