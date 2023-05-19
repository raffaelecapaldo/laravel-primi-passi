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
    $data = [
        'title' => 'Hello World',
        'links' => [
            'home' => route('home'),
            'uni' => route('uni'),
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/uni', function () {
    $data = [
        'title' => 'Uni the Cat',
        'uniImage' => 'https://pbs.twimg.com/media/FpuxcfiX0AAuUA4.jpg',
        'links' => [
            'home' => route('home'),
            'uni' => route('uni'),
        ]
    ];
    return view('unicat', $data);
})->name('uni');

