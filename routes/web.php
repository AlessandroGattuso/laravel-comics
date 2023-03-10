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

Route::get('', function () {

    $data = config('comics');
    return view('home', compact('data'));
    
})->name('home');;


Route::get('comics/{comicID}', function ($comicID) {

    $data = config('comics');

    $comic = $data['comics'][$comicID];
    
    return view('comic', compact('data','comic'));

})->name('comic');
