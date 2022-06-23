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
        'navbar' => [
            '' => 'home',
            'products' => 'products',
            'aboutus' => 'about us',
            'contacts' => 'contacts',
        ]
    ];
    return view('home', $data);
});

Route::get('/products', function () {
    $data = [
        'navbar' => [
            '' => 'home',
            'products' => 'products',
            'aboutus' => 'about us',
            'contacts' => 'contacts',
        ]
    ];
    return view('products', $data);
});

Route::get('/aboutus', function () {
    $data = [
        'navbar' => [
            '' => 'home',
            'products' => 'products',
            'aboutus' => 'about us',
            'contacts' => 'contacts',
        ]
    ];
    return view('aboutus', $data);
});

Route::get('/contacts', function () {
    $data = [
        'navbar' => [
            '' => 'home',
            'products' => 'products',
            'aboutus' => 'about us',
            'contacts' => 'contacts',
        ]
    ];
    return view('contacts', $data);
});