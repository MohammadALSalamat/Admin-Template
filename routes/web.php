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


Route::match(['get', 'post'], '/', 'AdminPanelController@login')->name('showLoginPage');
Route::match(['get', 'post'], '/admin/register', 'AdminPanelController@register')->name("registerAdminPage");
Route::match(['get', 'post'], '/Insert', 'AdminPanelController@createAccount')->name("Insert-data");
Route::match(['get', 'post'], '/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
// own admin sittings

route::get('/sittings', 'AdminPanelController@update_sittings')->name('show-sittings');
// users button
Route::get('/users', 'Users@viewUsers')->name('view-user');

// videos button

Route::get('/uplode-videos', "VideosController@uplodeVideo")->name('uplode-video');
