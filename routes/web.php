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
    return view('layout.template');
});

Route::get('cv', function () {
    return view('cv');
})->name('mon-cv');

Route::get('temoignage', function () {
    return view('mes sections/temoignage');
})->name('nos-temoignage');

Route::get('partenaire', function () {
    return view('mes sections/partenaire');
})->name('nos-partenaire');

Route::get('apropo', function () {
    return view('mes sections/about');
})->name('about-us');

Route::get('etic.html', [DataController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
