<?php



Route::group(['domain' => 'getaustraliastanding.org'], function()
{
    Route::auth();

    //do for all pages below
    Route::get('introduction.php', function () {return redirect('introduction');});

    Route::get('/jobs', 'HomeController@jobs');
    //was sitemap routes here below
    Route::get('/sitemap', function()
    { return Response::view('sitemap.aus')->header('Content-Type', 'application/xml'); });

    Route::get('/popup_confirm','GausPopupController@confirm');
    Route::get('/{page?}', 'GausController@index');
    Route::post('popup_reg', 'GausPopupController@store');
    Route::post('gaus_reg', 'GausController@store');
});


Route::group(['domain' => 'getcanadastanding.org'], function()
{
    Route::auth();
    //was sitemap routes here below
    Route::get('/sitemap', function()
    { return Response::view('sitemap.can')->header('Content-Type', 'application/xml'); });

    Route::get('/popup_confirm','GcanPopupController@confirm');
    Route::get('/{page?}', 'GcanController@index');
    Route::post('popup_reg', 'GcanPopupController@store');
    Route::post('gcan_reg', 'GcanController@store');
});


Route::group(['domain' => 'getamericastanding.org'], function()
{
    Route::auth();

    Route::get('/sitemap', function()
    { return Response::view('sitemap.usa')->header('Content-Type', 'application/xml'); });

    Route::get('/popup_confirm','GusaPopupController@confirm');
    Route::get('/{page?}', 'GusaController@index');
    Route::post('popup_reg', 'GusaPopupController@store');
    Route::post('gusa_reg', 'GusaController@store');
});


Route::group(['domain' => 'onyourfeetday.com'], function()
{
    Route::auth();

    Route::get('/sitemap', function()
    { return Response::view('sitemap.oyf')->header('Content-Type', 'application/xml'); });

    Route::get('/{country?}/{action?}/{param?}', 'OyfController@index');
    Route::post('oyf_reg', 'OyfController@store');

});



Route::group(['domain' => 'onyourfeet.eu'], function()
{
    Route::auth();

    Route::get('/{country?}/{action?}/{param?}', 'OyfController@index');
    Route::post('oyf_reg', 'OyfController@store');

});






Route::group(['domain' => 'activeworking.com'], function()
{
    Route::auth();



    Route::get('/sitemap', function()
    { return Response::view('sitemap.aw')->header('Content-Type', 'application/xml'); });

    /*below sending csv files with registrations*/
    Route::get('sendcsv', 'RegistrationsController@sendcsv');

    /* below displaying registrations routes */
    Route::get('data_gbsreg', 'RegistrationsController@gbs');
    Route::get('data_gbspopup', 'RegistrationsController@gbspopup');

    Route::get('data_ausreg', 'RegistrationsController@gaus');
    Route::get('data_auspopup', 'RegistrationsController@gauspopup');

    Route::get('data_canreg', 'RegistrationsController@gcan');
    Route::get('data_canpopup', 'RegistrationsController@gcanpopup');

    Route::get('data_usareg', 'RegistrationsController@gusa');
    Route::get('data_usapopup', 'RegistrationsController@gusapopup');

    Route::get('data_awreg', 'RegistrationsController@aw');
    Route::get('data_awpopup', 'RegistrationsController@awpopup');
    Route::get('data_awsummit', 'RegistrationsController@awsummit');

    Route::get('data_oyfreg', 'RegistrationsController@oyf');
    Route::get('data_overview', 'RegistrationsController@overview');





    Route::get('/onyourfeet/europe', function () {
        $url = 'http://onyourfeetday.com';
        return Redirect::to($url);
    });

    Route::get('summit/{year?}/{page?}', 'AwController@summit');
    Route::get('/popup_confirm','AwPopupController@confirm');

    Route::get('{page?}', 'AwController@index');

    Route::post('aw_reg', 'AwController@store');
    Route::post('summit_message', 'AwController@message');
    Route::post('summit_reg', 'AwController@summitreg');
    Route::post('popup_reg', 'AwPopupController@store');
    Route::post('nudge_reg', 'NudgeController@store');


});



Route::group(['domain' => '127.0.0.1'], function()
{
    Route::auth();

    Route::get('data_gbsreg', 'RegistrationsController@gbs');
    Route::get('data_gbspopup', 'RegistrationsController@gbspopup');

    Route::get('data_ausreg', 'RegistrationsController@gaus');
    Route::get('data_auspopup', 'RegistrationsController@gauspopup');

    Route::get('data_canreg', 'RegistrationsController@gcan');
    Route::get('data_canpopup', 'RegistrationsController@gcanpopup');

    Route::get('data_usareg', 'RegistrationsController@gusa');
    Route::get('data_usapopup', 'RegistrationsController@gusapopup');

    Route::get('data_awreg', 'RegistrationsController@aw');
    Route::get('data_awpopup', 'RegistrationsController@awpopup');
    Route::get('data_awsummit', 'RegistrationsController@awsummit');

    Route::get('data_oyfreg', 'RegistrationsController@oyf');

    Route::get('data_overview', 'RegistrationsController@overview');



    Route::get('summit/{year?}/{page?}', 'AwController@summit');
    Route::get('/popup_confirm','AwPopupController@confirm');

    Route::get('{page?}', 'AwController@index');

    Route::post('aw_reg', 'AwController@store');
    Route::post('summit_message', 'AwController@message');
    Route::post('summit_reg', 'AwController@summitreg');
    Route::post('popup_reg', 'AwPopupController@store');
    Route::post('nudge_reg', 'NudgeController@store');

});

