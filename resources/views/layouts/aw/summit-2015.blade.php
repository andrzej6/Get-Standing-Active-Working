{{-- */
$sidemenu=array('index'=>'Feedback 2015','agenda'=>'Agenda','videos'=>'Videos','speakers'=>'Bibliographies',
'partners'=>'Partners','case_studies'=>'Case Studies','collaborators'=>'Collaborators','venue'=>'Venue');
/* --}}

@extends('layouts.aw.summit')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/summit15.css">
@endsection

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/summit/2015/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
@endsection

@section('partnersleft')
    @include('shared.aw.summit.2015.partnersleft')
@endsection

@section('top-content')
    @include('shared.aw.summit.2015.topcontent')
@endsection


@section('partnersright')
    @include('shared.aw.summit.2015.partnersright')
@endsection