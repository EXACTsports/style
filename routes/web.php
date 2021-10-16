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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/colours', function () {
    return view('colours');
})->name('style.colours');

Route::get('/headings', function () {
    return view('headings');
})->name('comp.headings');

Route::get('/tables', function () {
    return view('tables');
})->name('comp.tables');

Route::get('/buttons', function () {
    return view('buttons');
})->name('comp.buttons');

Route::get('/links', function () {
    return view('links');
})->name('comp.links');

Route::get('/inputs', function () {
    return view('inputs');
})->name('comp.inputs');

require __DIR__.'/auth.php';
