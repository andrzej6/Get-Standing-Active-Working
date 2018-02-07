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
    <img src="{{ url('/') }}/img/aw/logos/gbs.png" >

    @include('shared.trail')
    <br/>

    <div class="gbs-innovate">

        <a href="http://getbritainstanding.org"><u>Get Britain Standing</u></a>™ is a mass media campaign to grow
        awareness and education of the dangers of sedentary working and prolonged sitting time, drawing public
        attention to the significant increase in health risks caused by sitting [i.e. heart disease, diabetes (type 2) and cancer].
        <br/><br>

        The Campaign is funded by Active Working C.I.C and is being extended to 10 additional countries.


        <br/><br/>

        <a href="http://getamericastanding.org/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/america.jpg" />
        </a> &nbsp;

        <a href="http://getbritainstanding.org/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/britain.jpg" />
        </a> &nbsp;

        <a href="http://getaustraliastanding.org/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/australia.jpg" />
        </a> &nbsp;

        <a href="http://getcanadastanding.org/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/canada.jpg" />
        </a> &nbsp;

        <a href="http://geteuropestanding.org/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/europe.jpg" />
        </a> &nbsp;

        <a href="http://getirelandstanding.com/" target="_blank">
            <img src="{{ url('/') }}/img/aw/logos/small/ireland.jpg" /> &nbsp;
        </a>


    </div>
    <br/>

    <hr class="light">
@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18e.jpg" alt="oyf"/>
    </a>

    <a href="careers" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/message/careers.jpg" target="_blank" alt="bhwa" /> <br/>
    </a>

@endsection