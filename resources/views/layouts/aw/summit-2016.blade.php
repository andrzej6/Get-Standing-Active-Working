{{-- */
$sidemenu=array('index'=>'Agenda 2016','speakers'=>'Bibliographies','partners'=>'Partners','attendance'=>'Attendance',
'videos'=>'Videos');
/* --}}

@extends('layouts.aw.summit')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/summit16.css">
@endsection

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/summit/2016/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
@endsection

@section('partnersleft')
    @include('shared.aw.summit.2016.partnersleft')
@endsection

@section('top-content')
    @include('shared.aw.summit.2016.topcontent')
@endsection


@section('partnersright')
    @include('shared.aw.summit.2016.partnersright')
@endsection