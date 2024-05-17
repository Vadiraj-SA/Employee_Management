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

// //Route::get('/employees', 'EmployeeController@index');
// Route::get('/employees', 'App\Http\Controllers\EmployeeController@index')->name('employees.index'); 
// Route::get('/employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create');
// // Employee Routes
// // Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);
// //Route::get("/employees', 'App\Http\Controllers\EmployeeController@show");
// Route::get('/employees/(id)', 'App\Http\Controllers\EmployeeController@show')->name('employees.show');  // Route with parameter Route::post('/employees/store', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');
// Route::get('/employees/{id}/edit', 'App\Http\Controllers\EmployeeController@edit')->name('employees.edit');
// Employee Management Routes

// Employee Management Routes
Route::get('/employees', 'App\Http\Controllers\EmployeeController@index')->name('employees.index');
Route::get('/employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create');
Route::post('/employees', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');
Route::get('/employees/{employee}', 'App\Http\Controllers\EmployeeController@show')->name('employees.show');
Route::get('/employees/{employee}/edit', 'App\Http\Controllers\EmployeeController@edit')->name('employees.edit');
Route::put('/employees/{employee}', 'App\Http\Controllers\EmployeeController@update')->name('employees.update');
Route::delete('/employees/{employee}', 'App\Http\Controllers\EmployeeController@destroy')->name('employees.destroy');
