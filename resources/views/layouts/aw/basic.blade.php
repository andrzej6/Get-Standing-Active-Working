@extends('layouts.aw')

@section('a-tracking')
    <script type="text/javascript" src="{{ url('/') }}/js/aw/track.js"></script>
@endsection

@section('meta')
    <meta name="google-site-verification" content="1I_WfKLBO2HS2etetgblmQ4f4D9Y1DmpUGrWYXmGV5E" />
@endsection

@section('favicon')
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/img/aw/favicon.ico">
@endsection


@section('header-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/main.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/popup.css">
@endsection


@section('mainlogo')
    <a href="{{ url('/') }}" class="logo"><img src="{{ url('/') }}/img/aw/logos/main.png" alt=""  class="logo_def"></a>
@endsection


@section('before-scripts')
    @include('shared.aw.prefooter')
    @include('shared.aw.footer')
@endsection


@section('footer-scripts')
    <script type="text/javascript" src="{{ url('/') }}/js/aw/popup.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/aw/main.js"></script>
@endsection