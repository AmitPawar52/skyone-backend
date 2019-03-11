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

Route::group(['prefix' => 'api/v1/Home'], function(){
    Route::resource('inquiry', 'InquiryController',[
        'only' => ['index', 'show', 'store', 'destroy']
    ]);
    Route::resource('contactus', 'ContactusController',[
        'only' => ['index', 'show', 'store', 'destroy']
    ]);
    Route::resource('faq', 'General\FaqController',[
        'only' => ['index', 'store', 'destroy', 'update']
    ]);
    Route::resource('blogs', 'General\blogController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
    Route::resource('loandetails', 'bank\loanDetailsController',[
        'only' => ['index', 'store', 'show', 'destroy', 'update']
    ]);
    
    Route::group(['prefix' => 'homepage'], function(){
        Route::resource('homeslider', 'home\homeSliderController',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);
        
        Route::resource('homesec2', 'home\Homesec2Controller',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);
        
        Route::resource('homesec3', 'home\Homesec3Controller',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);

        Route::resource('homesec4', 'home\Homesec4Controller',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);

        // loanprocess == homesec5
        Route::resource('loanprocess', 'home\LoanProcessController',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);

        Route::resource('clientspeaks', 'home\ClientSpeaksController',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);

        Route::resource('partners', 'home\PartnersController',[
            'only' => ['index', 'store', 'show', 'destroy', 'update']
        ]);
    });
});

