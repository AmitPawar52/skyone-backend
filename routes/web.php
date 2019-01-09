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
Route::get('/', function() {
	return view('welcome');
})->middleware('guest');

Route::group(['prefix' => 'api/Home'], function(){
    Route::resource('inquiry', 'InquiryController',[
        'only' => ['index', 'show', 'store', 'destroy']
    ]);
    Route::resource('contactus', 'ContactusController',[
        'only' => ['store']
    ]);
});
