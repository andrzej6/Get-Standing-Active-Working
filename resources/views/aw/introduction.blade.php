@extends('layouts.aw.basic-sub-ext')

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

    @include('shared.trail')
    <br/>

    <div class="aw-wheel">

        <div>
            <div style="float:left" class="wheel-left">
                <div>
                    <img src="{{ url('/') }}/img/aw/logos/aw-wheel.jpg" class="wheel-logo">
                </div>

                <div class="wheel-text">
                    Active Working™ increases <strong>employee wellness and performance</strong> through
                    break-up and reduction of workplace sedentary behaviour.

                    <br/><br/>
                    Our fully integrated expert approach means our clients source the
                    <strong>optimal mix of solutions</strong> with the necessary training and support to
                    <strong>maximise the benefits and return on investment</strong>.

                    <br/><br/>

                    <img src="{{ url('/') }}/img/aw/icon/phone.jpg"> &nbsp;&nbsp;
                    <span class="wheel-contact">020 8255 6091
                    </span><br/>

                    <a href="mailto:activeworking.com">
                        <img src="{{ url('/') }}/img/aw/icon/mail.jpg">
                    </a> &nbsp;&nbsp;
                    <span class="wheel-contact" id="email_hidden1">
                    </span><br/>

                    <a href="http://www.activeworking.com">
                        <img src="{{ url('/') }}/img/aw/icon/web.jpg">
                    </a> &nbsp;&nbsp;
                    <span class="wheel-contact">
                        <a href="http://www.activeworking.com">www.activeworking.com</a>
                    </span><br/>

                </div>

            </div>


            <div style="float:right" class="wheel-right">
                <img src="{{ url('/') }}/img/aw/wheel.jpg" class="wheel-pic">

            </div>


            <div style="clear: both"></div>
        </div>

    </div>



@endsection


@section('content-restofsmall')
    <a href="http://activeworking.com/pdfs/survey_results.pdf" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/message/survey-ad4.jpg" alt="oyf"/>
    </a>


    <img src="{{ url('/') }}/img/aw/ads/message/standing_great.jpg" class="restofsmall-pic" alt="feel after"/>

    <!--
    <a href="http://onyourfeetday.com" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf2017.jpg" alt="oyf"/>
    </a>


     <a href="http://activeworking.com/summit/2017/introduction" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/aw/ads/summit/awsummit17.jpg" alt="oyf"/>
    </a>



    <a href="http://onyourfeetday.com/britain" class="darken" target="_blank">
        <img src="{{ url('/') }}/img/getstanding/gb/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>
    -->




@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript">
        var s1="=b!isfg>#nbjmup;jogpAbdujwfxpsljoh/dpn#?jogpAbdujwfxpsljoh/dpn=0b?";
        m=""; for (i=0; i<s1.length; i++) m+=String.fromCharCode(s1.charCodeAt(i)-1);
        document.getElementById('email_hidden1').innerHTML=m;
    </script>
@endsection
