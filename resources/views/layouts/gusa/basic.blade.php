@extends('layouts.getstanding')

@section('favicon')
    <link rel="shortcut icon" type="image/x-icon" href="img/getstanding/usa/favicon.ico">
@endsection


@section('header-styles')
    <link rel="stylesheet" type="text/css" href="css/gusa/main.css">
    <link rel="stylesheet" type="text/css" href="css/gusa/popup.css">
@endsection


@section('mainlogo')
    <a href="{{ url('/') }}" class="logo"><img src="img/getstanding/usa/logos/main.png" alt=""  width="122" height="43" class="logo_def"></a>
@endsection


@section('oyfshortcut')
    <div id="oyf-shortcut">
        <a href="http://onyourfeetday.com/america" target="_blank"><img src="img/getstanding/usa/oyf-shortcut.png"></a>
    </div>
@endsection



@section('before-scripts')
    @include('shared.gusa.prefooter')
    @include('shared.gusa.footer')
@endsection


@section('footer-scripts')
    <script type="text/javascript" src="js/gusa/track.js"></script>
    <script type="text/javascript" src="js/gusa/popup.js"></script>
    <script type="text/javascript" src="js/gusa/main.js"></script>
@endsection