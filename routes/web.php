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

Route::get('home', function () {
    $nameSection = '| Home';
    return view('welcome', compact('nameSection'));
});

Route::get('about', function () {
    $nameSection = '| About';
    return view('about', compact('nameSection'));
});

Route::get('contacts', function () {
    $nameSection = '| Contacts';
    return view('contacts', compact('nameSection'));
});
