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


//below when accessing route home we go to HomeController but in
//construct there we have $this->middleware('auth'); so we are redirected to login
//we can do it here or in controller level

    //Route::get('/', function () {
    //   return view('welcome');
    //});


    Route::group(['domain' => 'getbritainstanding.org'], function()
    {
        Route::auth();
        Route::get('/home', 'HomeController@index');
        Route::get('/{page?}', 'GbsController@index');
    });

/*
below all working first for gbs version
then to aus version
Route::group(['domain' => '127.0.0.1'], function()
    {
        Route::get('/jobs', 'HomeController@jobs');
        Route::auth();
        Route::get('/popup_confirm','GbsPopupController@confirm');
        Route::get('/{page?}', 'GbsController@index');
        Route::post('popup_reg', 'GbsPopupController@store');
        Route::post('gbs_reg', 'GbsController@store');
    });

    Route::group(['domain' => '127.0.0.1'], function()
    {
        Route::auth();
        Route::get('/popup_confirm','GausPopupController@confirm');
        Route::get('/{page?}', 'GausController@index');
        Route::post('popup_reg', 'GausPopupController@store');
        Route::post('gaus_reg', 'GausController@store');
    });


    Route::group(['domain' => 'getnzstanding.net'], function()
    {
        Route::auth();
        Route::get('/jobs', 'HomeController@jobs');

        Route::get('/popup_confirm','GbsPopupController@confirm');

        Route::get('/{page?}', 'GbsController@index');

        Route::post('popup_reg', 'GbsPopupController@store');
        Route::post('gbs_reg', 'GbsController@store');
    });
*/


    Route::group(['domain' => 'getnzstanding.net'], function()
    {
        Route::auth();
        Route::get('/jobs', 'HomeController@jobs');

        Route::get('/popup_confirm','GausPopupController@confirm');
        Route::get('/{page?}', 'GausController@index');
        Route::post('popup_reg', 'GausPopupController@store');
        Route::post('gaus_reg', 'GausController@store');
    });