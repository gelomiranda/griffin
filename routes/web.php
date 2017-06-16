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
    return view('frontend/home');
});


Route::get('/how-it-works', function () {
    return view('frontend/how_it_works');
});

Route::get('/lenders', function () {
    return view('frontend/lenders');
});


Route::get('/brokers', function () {
    return view('frontend/brokers');
});


Route::get('/patient', function () {
    return view('welcome');
});


Route::get('/patient/create', function () {
    return view('patient.create');
});


/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
| Here is where all the administrator routes register
|
*/

Route::get('/administrator/employee_type', function () {
    return view('administrator.employee_type');
});

/*End Administrator Routes*/




