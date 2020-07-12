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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rests', function () {
    return view('rests');
});

Route::get('/rest-profile', function () {
    return view('rest-profile');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/order-profile', function () {
    return view('order-profile');
});

Route::get('/customer-profile', function () {
    return view('customer-profile');
});

Route::get('/food-types', function () {
    return view('food-types');
});

Route::get('/notifications', function () {
    return view('notifications');
});