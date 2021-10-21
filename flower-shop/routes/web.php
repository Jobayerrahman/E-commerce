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

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/order', function () {
    return view('order');
});
