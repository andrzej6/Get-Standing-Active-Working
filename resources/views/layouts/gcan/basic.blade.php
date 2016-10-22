@extends('layouts.getstanding')

@section('favicon')
    <link rel="shortcut icon" type="image/x-icon" href="img/getstanding/can/favicon.ico">
@endsection


@section('header-styles')
    <link rel="stylesheet" type="text/css" href="css/gcan/main.css">
    <link rel="stylesheet" type="text/css" href="css/gcan/popup.css">
@endsection


@section('mainlogo')
    <a href="{{ url('/') }}" class="logo"><img src="img/getstanding/can/logos/main.png" alt=""  width="122" height="43" class="logo_def"></a>
@endsection


@section('oyfshortcut')
    <div id="oyf-shortcut">
        <a href="http://onyourfeetday.com/canada" target="_blank"><img src="img/getstanding/can/oyf-shortcut.png"></a>
    </div>
@endsection



@section('before-scripts')
    @include('shared.gcan.prefooter')
    @include('shared.gcan.footer')
@endsection


@section('footer-scripts')
    <script type="text/javascript" src="js/gcan/track.js"></script>
    <script type="text/javascript" src="js/gcan/popup.js"></script>
    <script type="text/javascript" src="js/gcan/main.js"></script>
@endsection