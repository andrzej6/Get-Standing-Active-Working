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
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/recommend1.jpg" alt="recommend" class="aw-wheel goto">
                    </div>

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/recommend2.jpg" alt="recommend" class="aw-wheel goto">
                    </div>

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/recommend3.jpg" alt="recommend" class="aw-wheel goto">
                    </div>

                    <div class="oneByOne_item ls_bg2">
                        <img src="{{ url('/') }}/img/aw/slider/subpage/recommend4.jpg" alt="recommend" class="aw-wheel goto">
                    </div>


                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1 class="activeworking">What is Active Working?</h1>




    Active Working involves simple solutions to encourage standing and movement whilst at work.
    <br/><br/><br/><br/>

        <div class="halfleft">
            <div class="bluetitle activeworking"> Sit-Stand solutions: </div>

            A Sit-Stand (height adjustable) work station is an excellent solution. It will enable you to simply alternate
            between sitting and standing as you feel appropriate. We propose mixing it up. Try to stand intermittently
            at your Sit-Stand desk for <strong> periods of between 15 mins and two hours at a time </strong> Take breaks, walk around
            and mix it up every day.

            <br/><br/>
            <div id="anchorhad"></div>
            <ol>
                <li><u><a href="http://getbritainstanding.org/solutions#anchorhad">Sit-Stand Desks</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchordsd">DIY Standing Desks</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchortd">Treadmill Desk</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchordmdr">Desk Mounts and Desk Risers</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchorbb">Sit-Stand Chair or Stool</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchorafm">Comfort Mat</a></u></li>
                <li><u><a href="http://getbritainstanding.org/solutions#anchorsssc">Balance Boards</a></u></li>
            </ol>
        </div>




        <div class="halfright">
            <div class="bluetitle activeworking"> Active Working Tips: </div>
            <ol>
                <li>Try to get key leadership support within your organisation. Start your own campaign. It works!</li>
                <li>Educate your colleagues about the dangers of prolonged and excessive sitting.</li>
                <li>Create an environment that is supportive of change.</li>
                <li>Keep moving around. Take frequent breaks.</li>
                <li>Take phone calls standing up, this also boosts confidence and voice quality.</li>
                <li>Try removing tables and chairs from meeting rooms. This leads to shorter meetings.</li>
                <li>Take the stairs instead of the lift.</li>
                <li>Walk to a colleague's desk, instead of emailing.</li>
                <li>Stand during presentations or speeches.</li>
                <li>Try taking a “Walking Meeting”.</li>
                <li>Try a Sit-Stand desk.</li>
            </ol>
        </div>

      <div class="clear"></div>

@endsection


@section('content-restofsmall')
    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>

    <a href="http://incorpore.co.uk/" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/supporters/incorpore.jpg"  alt="feel after"/>
    </a>


    <a href="careers" class="darken">
        <img src="{{ url('/') }}/img/aw/ads/message/careers.jpg"  alt=""/>
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-side.js"></script>
@endsection