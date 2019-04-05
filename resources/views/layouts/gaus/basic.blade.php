@extends('layouts.getstanding')

@section('meta')
    <meta name="google-site-verification" content="xUqNJhso-5SkHAU3tKD_fPwC89id1mOGGwFivnffoRE" />
@endsection


@section('favicon')
    <link rel="shortcut icon" type="image/x-icon" href="img/getstanding/aus/favicon.ico">
@endsection


@section('header-styles')
    <link rel="stylesheet" type="text/css" href="css/gaus/main.css">
    <link rel="stylesheet" type="text/css" href="css/gaus/popup.css">
@endsection


@section('mainlogo')
    <a href="{{ url('/') }}" class="logo"><img src="img/getstanding/aus/logos/main.png" alt=""  width="122" height="43" class="logo_def"></a>
@endsection


{{--  
@section('oyfshortcut')
    <div id="oyf-shortcut">
        <a href="http://onyourfeetday.com/australia" target="_blank"><img src="img/getstanding/aus/oyf-shortcut.png"></a>
    </div>
@endsection
--}}

@section('before-scripts')
    @include('shared.gaus.prefooter')
    @include('shared.gaus.footer')
@endsection


@section('footer-scripts')
    <script type="text/javascript" src="js/gaus/track.js"></script>
    <script type="text/javascript" src="js/gaus/popup.js"></script>
    <script type="text/javascript" src="js/gaus/main.js"></script>
@endsection