@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/aw/mix.css">
@endsection

@section('content')
    <div class="contentarea">

        <div class="smallwidth-wheel">
            @yield('content-smallwidth')
        </div>

        <div class="restofsmall-wheel">
            @yield('content-restofsmall')
        </div>

        <div class="clear"></div>
    </div> <!--contentarea-->
@endsection