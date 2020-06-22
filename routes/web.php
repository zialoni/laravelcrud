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
/*****************Start routes are for inserting data*** */
Route::get('/student','StudentController@displayform');

Route::post('/add_data', 'StudentController@save');

Route::get('/studentadd','StudentController@displayform');
/***************End routes for inserting data */

/*********************Start Routes are for fetch/Dispaly Data */

Route::get('/studentview','StudentController@viewform');

Route::get('/studentview','StudentController@index');

/**********End Routes for Fetch/Display Data */


/*******************State Route Update data */

Route::get('click_edit/{id}','StudentController@edit_function');

Route::post('/update/{id}','StudentController@update_function');

/*******************State Route DElete Data************ */

/***********************Route for Delete Data*********** */

Route::get('/click_delete/{id}','StudentController@delete_function');

Route::get('/', function () {
    return view('welcome');
});
