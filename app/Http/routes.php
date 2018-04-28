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
    Route::get('office', 'OfficeController@index')->name('office');
    Route::get('offices', 'OfficeController@getOffices');
	Route::get('office/{office}', 'OfficeController@show');
	Route::get('add/office', 'OfficeController@add');
	
	Route::post('add/office/store', 'OfficeController@store');

	Route::get('insert', 'RecordsController@index');
	Route::get('records/{record}/delete', 'RecordsController@destroy');
	Route::get('records/{record}/equipments/reduce', 'RecordsController@reduceEquipments');
	Route::get('records/{record}/equipments/increase', 'RecordsController@addEquipments');
	Route::get('records/{record}/faulty/increase', 'RecordsController@addFaulty');
	Route::get('records/{record}/faulty/reduce', 'RecordsController@reduceFaulty');

	Route::get('records/{office}/add', 'RecordsController@add');
	Route::post('records/{office}/add', 'RecordsController@store');
	Route::get('records/{record}', 'RecordsController@show');

    Route::get('equipment/new', 'EquipmentController@add')->name('equipment');
    Route::post('equipment/new', 'EquipmentController@store');

    Route::get('toggle-mode', 'HomeController@toggleMode')->name('toggle-mode');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test');
