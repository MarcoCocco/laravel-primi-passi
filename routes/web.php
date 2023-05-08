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
    $listaSpesa = [
        'Pane',
        'Acqua',
        'Pasta',
        'Uova',
        'Latte'
    ];

    $links = [
        'about',
        'contacts',
        'download',
        'content'
    ];



    return view('home', compact('listaSpesa', 'links'));
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');;

Route::get('/download', function () {
    return view('download');
})->name('download');;

Route::get('/content', function () {
    return view('content');
})->name('content');;
