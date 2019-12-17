<?php

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
    return view('home');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/noticias', function () {
    return view('noticias');
});


Route::get('/detalhes', function () {
    return view('noticiaDetalhes');
});
