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
        'page_title' => 'Welcome to La Molisana',
        'page_intro' => 'La Molisana Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque culpa, natus deserunt mollitia debitis pariatur cumque eius temporibus suscipit commodi tenetur quas, maxime ducimus odit maiores excepturi. Dolorem necessitatibus, qui amet alias architecto pariatur vitae officiis voluptates praesentium possimus debitis consequatur accusamus doloremque et maiores quaerat ipsam at, ex quia?'
    ];
    return view('welcome', $data);
})->name('home');

Route::get('/products', function () {
    $products = config('db.products');
    return view('products', compact('products'));
})->name('products');

Route::get('/news', function () {
    $data = [
        'page_title' => 'News form La Molisana',
        'page_intro' => 'La Molisana Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque culpa, natus deserunt mollitia debitis pariatur cumque eius temporibus suscipit commodi tenetur quas, maxime ducimus odit maiores excepturi. Dolorem necessitatibus, qui amet alias architecto pariatur vitae officiis voluptates praesentium possimus debitis consequatur accusamus doloremque et maiores quaerat ipsam at, ex quia?'
    ];
    return view('news', $data);
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
