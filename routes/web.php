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
    $name = "Victor";
    $age = 18;

    $arr = [10, 20, 30, 40, 50];
    $names = ["Matheus", "Victor", "Roberto", "Saulo"];

    return view('welcome',
        [
            'name' => $name,
            'age' => $age,
            'occupation' => 'developer',
            'arr' => $arr,
            'names' => $names,
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    $search = request('search');

    return view('products', ['search' => $search]);
});

Route::get('/products_test/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
