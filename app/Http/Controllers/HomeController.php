<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['jobs']]);
        //below created middleware
        //$this->middleware('admin');


        //we can also use:
        //$this->middleware('auth',['except'=>['index']]);
        //$this->middleware('auth',['only'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function jobs()
    {
        Artisan::call('queue:work', ['--deamon', '--tries' =>3]);
        return 'passed';
    }




}
