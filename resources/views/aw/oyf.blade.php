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
    Active Working, Productive Working, Healthy Office, Sit-Stand Solutions, Minor Changes,
    Exercises or Movement Reduce Health Risks.
@endsection



@section('content-smallwidth')
    <img src="{{ url('/') }}/img/aw/logos/oyf.jpg" >

    @include('shared.trail')
    <br/>

    <div class="gbs-innovate">
        <a href="http://onyourfeetday.com/britain"><u>On Your Feet Britain</u></a>™
        is an annual workplace awareness day run on the final Friday in April for employees.
        This event is owned by <strong>Get Britain Standing</strong>™ campaign and run in partnership with the
        <strong>British Heart Foundation</strong> Over 500 companies and 100,000 employees participated in the inaugural 2015 OYFB day
        which trended #3 on Twitter. We expect participation to double in 2016 and the event will be run internationally.

        <br/><br>

        For more information <a href="http://onyourfeetday.com/britain">
            <u>visit our website</u></a>.

        <br/><br/>

        <a href="http://onyourfeetday.com/america" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/oyf-america.jpg" />
        </a> &nbsp;

        <a href="http://onyourfeetday.com" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/oyf-britain.jpg" />
        </a> &nbsp;

        <a href="http://onyourfeetday.com/canada" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/oyf-canada.jpg" />
        </a> &nbsp;

        <a href="http://onyourfeetday.com/ireland" target="_blank">
        <img src="{{ url('/') }}/img/aw/logos/small/oyf-ireland.jpg" /></a> &nbsp;

       

    </div>


    <br/>
    <hr class="light">
    <br/>
@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <a href="careers" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/message/careers.jpg" target="_blank" alt="bhwa" /> <br/>
    </a>

@endsection