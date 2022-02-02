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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Profile');

Route::get('/signin', 'LoginController@Logincheck')->name('Login');
Route::get('/signup', 'SignUpController@Signupcheck')->name('Register');
Route::get('/Dashboard', 'DashboardController@Home')->name('Dashboard');
Route::get('/Dashboard_Ar', 'DashboardController@Home_Ar')->name('Dashboard_Ar');
Route::get('/detail/{id}', 'Manga_detail@details')->name('Manga_detail');
Route::get('/detail_Ar/{id}', 'Manga_detail@details_Ar')->name('Manga_detail_Ar');
Route::get('/chapter/{id}', 'Chapters@Chapter_album')->name('chapter');
Route::get('/chapter_Ar/{id}', 'Chapters@Chapter_album_Ar')->name('chapter_Ar');
Route::get('/test', 'LoginController@test')->name('test');
