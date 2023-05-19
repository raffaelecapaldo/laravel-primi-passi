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
            'testpage' => route('testpage')
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
            'testpage' => route('testpage'),
            'unilol' => route('unilol')

        ]
    ];
    return view('unicat', $data);
})->name('uni');

Route::get('/testpage', function () {
    $numbers = [];
    $counter = 1;
    while ($counter <= 100) {
        $number = rand(1, 500);
        array_push($numbers, $number);
        $counter++;
    }
    $data = [
        'numbers' => $numbers,
        'links' => [
            'home' => route('home'),
            'uni' => route('uni'),
            'testpage' => route('testpage')
        ]
    ];
    return view('testpage', $data);



})->name('testpage');

Route::get('/uni.jpg', function () {
    $data = [
        'title' => 'Uni the Cat',
        'uniImage' => 'https://pbs.twimg.com/media/FpuxcfiX0AAuUA4.jpg',
        'links' => [
            'home' => route('home'),
            'uni' => route('uni'),
            'testpage' => route('testpage'),
        ]
    ];
    return view('imagerandom', $data);
})->name('unilol');
