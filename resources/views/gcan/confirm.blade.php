@extends('layouts.gcan.basic')

@section('description')
    Email activation page.
@endsection

@section('keywords')
    confirmation
@endsection

@section('title')
    Email confirmation page
@endsection


@section('content')
<div class="contentarea">
    <div class="row-fluid">
        @include('shared.trail')
        <br/>

        <h1>Confirmation Page</h1>


        @if (Session::has('status'))
            <div class="alert alert-{{Session::get('level')}}">
                <strong>{{Session::get('status')}}</strong>
            </div>
        @endif


    </div>
</div>
@endsection
