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
           Thank you for confirmation.

        {{$mailing_data['email']}}
        {{$mailing_data['list']}}
    </div>

@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>

    <img src="{{ url('/') }}/img/aw/ads/message/who.png" class="restofsmall-pic"  alt=""/>

@endsection