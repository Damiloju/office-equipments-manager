<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('office', 'OfficeController@index');
	Route::get('office/{office}', 'OfficeController@show');
	Route::get('add/office', 'OfficeController@add');
	
	Route::post('add/office/store', 'OfficeController@store');

	Route::get('insert', 'RecordsController@index');
	Route::get('records/{record}/delete', 'RecordsController@destroy');
	Route::get('records/{record}/reduce', 'RecordsController@reduce');

	Route::get('records/{office}/add', 'RecordsController@add');
	Route::post('records/{office}/add', 'RecordsController@store');
	Route::get('records/{record}', 'RecordsController@show');

    Route::get('equipment/new', 'EquipmentController@add');
    Route::post('equipment/new', 'EquipmentController@store');
});


Route::get('/', 'HomeController@index');
	