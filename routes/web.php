<?php

use App\Http\Controllers\loginController;
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

Route::get('/test/coba', 'schoolfromController@stringTest');

Route::get('/', 'loginController@index');
Route::post('logses', 'loginController@auth');
Route::get('logout', 'loginController@logout');

Route::get('home', function () {
    return view('home');
});

// Route::get('logic', function () {
//     return view('logic');
// });

// Route::get('database', function () {
//     return view('database');
// });

Route::get('logic', 'logicController@index');
Route::post('logic/proses', 'logicController@proses');

Route::get('student', 'studentController@index');
Route::post('student/store', 'studentController@store');
Route::get('student/edit/{id}', 'studentController@edit');
Route::get('student/hapus/{id}', 'studentController@hapus');
Route::get('schoolfrom', 'schoolfromController@index');
Route::post('schoolfrom/store', 'schoolfromController@store');
Route::get('all/data', 'studentController@alldata')->name('all.data');
