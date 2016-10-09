@extends('layouts.aw.summit-2015')

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
    Active Working Summit 2015
@endsection


@section('aw-maincontent')
    <br/>
    <img src="{{ url('/') }}/img/aw/summit/2015/panoramic.jpg"/>

    <br/><br/>
    <div class="aw-support-statement">
        The Active Working Summit is officially supported by Dame Sally Davies, Chief Medical Officer of England.
    </div>

    <br/>
    <div class="feedback-bold">
        Survey Results:
    </div>

    <ul class="feedback-survey">
        <li><strong>96%</strong> Satisfaction Rating </li>
        <li><strong>85%</strong> will come again +/or recommend</li>
    </ul>


    <div class="feedback-bold">
        Delegate & Sponsor Quotes:
    </div>


    <ul class="feedback-delegates">
        <li>
            <i>“I attended the Active Working Summit and found it immensely valuable – Johnson & Johnson are
                going to be moving forward in promoting this important message to our office based employees”
            </i>
        </li>
        <li>
            <i>“Excellent line up of speakers - gave good overview of current state of play, research etc.
                Great networking opportunities as good mix of backgrounds form providers as well as
                corporates.”
            </i>
        </li>

        <li>
            <i>“I have attended over twenty 1-day events and this was by far the best.”</i>
        </li>
    </ul>
@endsection
