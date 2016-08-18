@extends('layouts.gaus.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gaus/mix.css">
@endsection

@section('content')
    <div class="contentarea">

        <div class="smallwidth">
            @yield('content-smallwidth')
        </div>

        <div class="restofsmall">
            @yield('content-restofsmall')
        </div>

        <div class="clear"></div>
    </div> <!--contentarea-->
@endsection