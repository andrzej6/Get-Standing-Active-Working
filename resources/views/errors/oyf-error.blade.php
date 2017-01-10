{{-- */
$sidemenu=array('index'=>'Event','challenge'=>'Challenge','partners'=>'Partmers','downloads'=>'Downloads');
/* --}}

@extends('layouts.oyf')

@section('description')
    Error page.
@endsection

@section('keywords')
    error
@endsection

@section('title')
    Error Page
@endsection


@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/britain/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
    <a href="{{ url('/') }}/signup"><li>Register</li></a>
@endsection


@section('partnersleft')
    @include('shared.oyf.gb.partnersleft')
    <hr class="light">
    @include('shared.oyf.gb.partnersleft')
@endsection



@section('aw-maincontent')
    <div class="contentarea">
        <div class="row-fluid">
            @include('shared.trail')
            <br/>

            <h1>Error Page</h1>

                <div class="alert alert-danger">
                    <strong>Sorry, this page is not available.</strong>
                </div>
        </div>
    </div>
@endsection