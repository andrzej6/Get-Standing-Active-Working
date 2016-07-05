@extends('layouts.gbs.plain')

@section('description')
    Error page.
@endsection

@section('keywords')
    error
@endsection

@section('title')
    Error Page
@endsection


@section('content')
    <div class="contentarea">
        <div class="row-fluid">
            @include('shared.gbs.trail')
            <br/>

            <h1>Error Page</h1>

                <div class="alert alert-danger">
                    <strong>Sorry, this page is not available.</strong>
                </div>



        </div>
    </div>
@endsection