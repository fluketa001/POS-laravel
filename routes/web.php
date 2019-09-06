<?php

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
    return redirect('/home');
    //return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company','HomeController@company')->name('company');
Route::get('/product','HomeController@product')->name('product');
Route::get('/user','HomeController@user')->name('user');
Route::get('/sell','HomeController@sell')->name('sell');
Route::get('/stock','HomeController@stock')->name('stock');
Route::get('/report','HomeController@report')->name('report');
Route::get('/report_summary','HomeController@report_summary')->name('report_summary');
Route::get('/personal_information','HomeController@personal_information')->name('personal_information');
