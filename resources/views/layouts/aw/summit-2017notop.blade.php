{{-- */
$sidemenu=array('introduction'=>'Introduction','programme'=>'Event Programme','venue'=>'Venue','pricing'=>'Pricing','book'=>'Book Now','press'=>'Press Release','contact'=>'Contact');
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
        @yield('center-pics')
    </div>
@endsection


@section('partnersright')
    @include('shared.aw.summit.2017.partnersright')
@endsection