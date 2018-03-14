@extends('layouts.aw.basic-sub')


@section('description')
    Advice on how to reduce your health risks. Minor changes, exercises or movement will significantly
    reduce your health risks.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, office-work, sit-stand-solutions, advice,
    sit-stand-desk, standing-desk, ergonomic, workstation, movement, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    Email List Confirmation
@endsection



@section('content-smallwidth')

    <div class="gbsintro link-line">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    <li>
                        <strong>Correct following errors: </strong>
                    </li>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('status'))
            <div class="alert alert-{{Session::get('level')}}">
                <strong>{{Session::get('status')}}</strong>
            </div>
        @endif
    </div>

@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>

    <img src="{{ url('/') }}/img/aw/ads/message/who.png" class="restofsmall-pic"  alt=""/>

@endsection