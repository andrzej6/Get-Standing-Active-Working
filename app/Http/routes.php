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


    Route::group(['domain' => '127.0.0.1'], function()
{
    Route::auth();
    Route::get('/popup_confirm','GcanPopupController@confirm');
    Route::get('/{page?}', 'GcanController@index');
    Route::post('popup_reg', 'GcanPopupController@store');
    Route::post('gcan_reg', 'GcanController@store');
});


    Route::group(['domain' => '127.0.0.1'], function()
    {
        Route::auth();
        Route::get('/popup_confirm','GusaPopupController@confirm');
        Route::get('/{page?}', 'GusaController@index');
        Route::post('popup_reg', 'GusaPopupController@store');
        Route::post('gusa_reg', 'GusaController@store');
    });




    Route::group(['domain' => '127.0.0.1'], function()
    {
        Route::auth();

        Route::get('{country?}/{action?}/{param?}', 'OyfController@index');
        Route::post('oyf_reg', 'OyfController@store');

    });


Route::group(['domain' => '127.0.0.1'], function()
{
    Route::auth();

    Route::get('summit/{year?}/{page?}', 'AwController@summit');
    Route::get('/popup_confirm','AwPopupController@confirm');

    Route::get('{page?}', 'AwController@index');

    Route::post('aw_reg', 'AwController@store');
    Route::post('summit_message', 'AwController@message');
    Route::post('summit_reg', 'AwController@summitreg');
    Route::post('popup_reg', 'AwPopupController@store');
    Route::post('nudge_reg', 'NudgeController@store');

});





*/

Route::group(['domain' => 'getaustraliastanding.org'], function()
{
    //Route::auth();
    Route::get('/jobs', 'HomeController@jobs');

    Route::get('/popup_confirm','GausPopupController@confirm');
    Route::get('/{page?}', 'GausController@index');
    Route::post('popup_reg', 'GausPopupController@store');
    Route::post('gaus_reg', 'GausController@store');
});



Route::group(['domain' => 'getnzstanding.net'], function()
{
    Route::auth();
    Route::get('/jobs', 'HomeController@jobs');

    Route::get('/popup_confirm','GausPopupController@confirm');
    Route::get('/{page?}', 'GausController@index');
    Route::post('popup_reg', 'GausPopupController@store');
    Route::post('gaus_reg', 'GausController@store');
});
