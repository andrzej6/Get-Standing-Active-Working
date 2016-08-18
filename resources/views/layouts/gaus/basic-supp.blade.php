@extends('layouts.gaus.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gaus/supporters.css">
@endsection

@section('content')
    <div class="contentarea">

        <div class="gbsinto-logo">
            @yield('supporter-banner')
        </div>

        <div class="smallwidth">
            @yield('supporter-small')
        </div>

        <div class="restofsmall">
            @yield('supporter-rest')
        </div>

        <div class="clear"></div>
    </div> <!--contentarea-->
@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $('.smallwidth').css( "width","75%");
        $('.restofsmall').css( "margin-left","2%");
    </script>
@endsection
