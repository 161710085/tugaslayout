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
    return view('welcome');
});

Route::get('latihan','LatihanController@coba');
Route::get('a','AboutController@about');
Route::get('tb','LatihanController@abarang');
Route::get('abo','AboutController@index');
Route::get('tes',function(){
return view('testing');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adit', function () {
    return view('layouts.coba');
});
Route::get('/thia', function () {
    return view('layouts.coba2');
});
Route::get('/janwar', function () {
    return view('layouts.coba3');
});
