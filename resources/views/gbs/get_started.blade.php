@extends('layouts.gbs.subpage')


@section('description')
    Significant productivity gains and wellness improvements for your employees. Introduction to Active Working,
    simple steps and grow awareness
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, productivity-improvements, sit-stand-solutions,
    sit-stand-information, sit-stand-desk, simple-steps, ergonomic, workstation, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, wellness
@endsection

@section('title')
    How to Get Started. Introduction to Active Working, Simple Steps and Grow Awareness
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg1">
                        <img src="img/aw/slider/subpage/benefits.png" alt="microsoft">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->


    <div class="row-fluid link-line">

        @include('shared.gbs.trail')
        <br/>

        <h1 class="activeworking">New To Sit-Stand?</h1><br/>

        <ul class="gbs-boldlist">
            <li>If you have never done it - then try it with one workstation.
                You will be amazed how positive people will be about it. Apply for a <a href="register">
                FREE TRIAL offer</a>.
            </li>

            <li>Start off with a single sit-stand workstation.
                To extend the trial with education and support -
                <a href="http://activeworking.com/contact-us.php" target="_top">we can help</a>.
            </li>

            <li>Environments that support wellbeing can be highly desirable places where people are less stressed, more productive,
                more creative, and healthier. Encourage all elements of <a href="http://activeworking.com">Active Working</a>.
            </li>

            <li>Awareness of the <span class="gbs-boldnu">benefits of Active Working </span> is growing rapidly as is
                <a href="media">media</a> attention. Take a stand and be pioneering.
            </li>
        </ul>

        <br/><br/>

        <div class="bluetitle activeworking">Other Active Working activities include:</div>


        <ol>
            <li>Stand and take a break from your computer every 30 minutes</li>
            <li>Stand during phone calls</li>
            <li>Use the stairs</li>
            <li>Have standing or walking meetings </li>
            <li>Eat your lunch away from your desk</li>
            <li>Walk to your colleague's desk instead of phoning or emailing them</li>
            <li>Stand at the back of the room during presentations</li>
        </ol>

        <br/><br/>

        <div class="bluetitle activeworking">Company Trials</div>
        In co-operation with a number of product suppliers we can assist your start with
        <a href="register">FREE TRIAL offer</a>. <br><br>

        If your company is interested in discussing a broader trial and requires assistance or support please
        <a href="register" target="_top">Contact Us</a>.<br/><br/>

    </div>


@endsection


@section('content-restofsmall')
    <img src="img/aw/ads/message/productivity.png" class="restofsmall-pic" alt="productivity"/>


    <a href="onyourfeet" class="darken" target="_blank">
        <img src="img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>


    <img src="img/aw/ads/message/calorie_burn.png" class="restofsmall-pic" alt="calories"/>


@endsection


@section('footer-scripts')
    @include('shared.gbs.sliderscript-side')
@endsection

