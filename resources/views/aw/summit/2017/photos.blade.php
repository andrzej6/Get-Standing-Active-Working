@extends('layouts.aw.summit-2017')

@section('header-styles')
    @parent
@endsection


@section('description')
    Active Working provide thought leadership to reduce prolonged sitting in the workplace. Working with government,
    medical science, health charities and employers.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Active Working Summit 2017. Pictures
@endsection


@section('aw-maincontent')
    <br/>

    <div id="summit-allpic">
        <a href="https://www.dropbox.com/sh/ts3tlg1ht66pvjc/AABe3EluUL9Dg2yqwhUyjrgba?dl=0" target="_blank">

        <div class="summitpic-h">
        @for ($i = 1; $i < 48; $i++)
              <img src="{{ url('/') }}/img/aw/summit/2017/pics/h/{{ $i }}.jpg" >
        @endfor
        </div>
        <br/>

        <div class="summitpic-v">
        @for ($i = 1; $i < 40; $i++)
                <img src="{{ url('/') }}/img/aw/summit/2017/pics/v/{{ $i }}.jpg" >
        @endfor
        </div>

        </a>


    </div>



@endsection
