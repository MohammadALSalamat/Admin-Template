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

Route::match(['get', 'post'], '/admin', 'AdminPanelController@login')->name('showLoginPage');
Route::match(['get', 'post'], '/admin/register', 'AdminPanelController@register')->name("registerAdminPage");
Route::match(['get', 'post'], '/Insert', 'AdminPanelController@createAccount')->name("Insert-data");
Route::match(['get', 'post'], '/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
