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
        'only' => ['index', 'show', 'store', 'destroy']
    ]);
    Route::resource('clientspeaks', 'ClientSpeaksController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
    Route::resource('faq', 'General\FaqController',[
        'only' => ['index', 'store', 'destroy', 'update']
    ]);
    Route::resource('homeslider', 'General\homeSliderController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
    Route::resource('blogs', 'General\blogController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
    Route::resource('loandetails', 'bank\loanDetailsController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
});

