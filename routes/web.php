<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

Route::get('/project/beranda','projectController@beranda');
Route::get('/project/perpustakaan','projectController@perpustakaan');
Route::get('/project/tulis','projectController@tulisCerpen');
Route::get('/project/tentang','projectController@tentangMinistry');
Route::post('/project/input','projectController@input');
Route::any ( '/project/perpustakaan/search', 'projectController@search');
Route::get('/awal','awalController@awal');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
