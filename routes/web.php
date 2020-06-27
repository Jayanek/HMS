<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/add-new', 'HomeController@new')->name('new-patient');
Route::get('/home/show/{id}', 'HomeController@show')->name('admin.show');
Route::post('add-patient', 'HomeController@store')->name('save-patient');

Route::resource('patient','PatientController');
