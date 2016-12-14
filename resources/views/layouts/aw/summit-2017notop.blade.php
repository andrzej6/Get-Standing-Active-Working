{{-- */
$sidemenu=array('agenda'=>'Agenda','brochure'=>'Brochure','contact'=>'Contact','pricing'=>'Pricing','book'=>'Book Now','venue'=>'Venue');
/* --}}

@extends('layouts.aw.summit')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/summit17.css">
@endsection

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/summit/2017/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
@endsection

@section('partnersleft')
    @include('shared.aw.summit.2017.partnersleft')
@endsection

@section('top-content')
    <div class="center-sidemenu">
         <img src="{{ url('/') }}/img/summit/gb/2017/brochurepic.jpg" >
    </div>
@endsection


@section('partnersright')
    @include('shared.aw.summit.2017.partnersright')
@endsection