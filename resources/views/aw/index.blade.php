@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/index.css">

    <style>
        .go-to {
            cursor:pointer;
        }
    </style>
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
    Active Working. Adding value to workplace and people.
@endsection




@section('content')
    <div class="contentarea">

        <div id="homemaincont">


            <div class="row-fluid">

                <div class="span12 module_cont module_layer_slider">

                    <div class="module_content slider_type1">
                        <div id="banner1" class="OneByOne_container">

                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/1-aw.jpg" alt="" class="go-to go-to-summit">
                            </div>

                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/2-awgbs.jpg" alt="" class="go-to go-to-summit">
                            </div>

                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/3-aw-gbs.jpg" alt="" class="go-to go-to-videos">
                            </div>


                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/slider1.jpg" alt="" class="go-to go-to-nudge">
                            </div>

                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/slider2.jpg" alt="" class="go-to go-to-careers">
                            </div>

                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/slider3.png" alt="" class="go-to go-to-statement">
                            </div>

                            <!--
                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/slider4.jpg" alt="" class="go-to go-to-videos">
                            </div>
                            -->
                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/aw-further.jpg" alt="" class="go-to go-to-summit">
                            </div>



                            <div class="oneByOne_item ls_bg1">
                                <img src="{{ url('/') }}/img/aw/slider/big/slider6.jpg" alt="" class="go-to go-to-who">
                            </div>


                        </div>
                    </div>

                </div>

            </div><!-- .row-fluid -->


            <div class="row-fluid">

                <div class="halfleft1">

                    <div id="leftsitcalc">

                        <h4>Office workers sit for 10 hours each day (on average).</h4>

                        Growing international scientific <a href="http://getbritainstanding.org/research.php">research evidence</a>
                        concludes that excessive and prolonged sitting (irrespective of your level of physical
                        activity) can lead to increased risks of: <br/><br/>

                        <div class="home-list">

                            <div class="left-list">
                                1. Heart disease<br/>
                                2. Diabetes(T2)<br/>
                                3. Mental Health<br/>
                                4. Cancers
                            </div>

                            <div class="right-list">
                                5. Backache<br/>
                                6. Thrombosis<br/>
                                7. Obesity<br/>
                                8. Muscle degeneration
                            </div>

                            <div class="clear"></div>
                        </div>

                        Active Working™ provides thought leadership and has spear headed
                        the drive for change in the office working environment working together
                        with government, medical science, health charities, employers and suppliers. <br/>
                        <ul>
                            <li>
                                <span class="gbs-expert">
                                    In January 2015 <strong>Public Health England </strong> and
                                    <strong>Active Working C.I.C </strong> jointly commissioned an
                                    <a href="http://getbritainstanding.org/expert_statement.php" target="_blank">Expert Statement</a>
                                    on the status and impact of prolonged sitting in the office
                                    <a href="http://getbritainstanding.org/pdfs/BJSM_Expert%20Statement%202015_06.pdf" target="_blank">(Download)</a>.
                              </span>

                            </li>

                            <li>
                                 <span class="normalblue">Check out the
                                     <a href="http://getbritainstanding.org/health-risks.php" target="_blank">Top 10 health risks</a>
                                     which grow for people who sit longer than 4 hours a day.
                                 </span>

                            </li>

                            <li>
                                  <span class="normalblue">Learn more about the simple steps to <a href="{{ url('/') }}/top-tips">Active Working</a>™
                                    and how it can deliver measurable improvements in employee health, productivity
                                    & engagement.
                                  </span>
                            </li>

                            <li>
                                <span class="normalblue bold">Join the <a href="{{ url('/') }}/contact">Active Working Network</a>™
                                    today and start to deliver measurable improvements in your organisation’s employee health,
                                    productivity & engagement.</span>
                            </li>

                        </ul>

                    </div>

                </div>



                <div class="halfright1">

                    <!--
                    <a href="http://onyourfeetday.com/" target="_blank">
                        <img src="{{ url('/') }}/img/aw/oyf-calc.jpg">
                    </a>
                    -->

                    <a href="http://activeworking.com/summit/2017/book" target="_blank">
                        <img src="{{ url('/') }}/img/aw/aw-big.jpg">
                    </a>

                </div>

                <div class="clear"></div>

            </div><!-- .row-fluid -->



            <div id="gbs-slideshow">

                <div>
                    <a href="https://www.gymflex.co.uk/" target="_blank">
                        <img src="{{ url('/') }}/img/aw/slider/thin/slider1.jpg">
                    </a>
                </div>


                <div>
                    <a href="http://incorpore.co.uk/" target="_blank">
                        <img src="{{ url('/') }}/img/aw/slider/thin/slider2.jpg">
                    </a>
                </div>

                <div>
                    <a href="http://imprintmats.com/" target="_blank">
                        <img src="{{ url('/') }}/img/aw/slider/thin/slider3.jpg">
                    </a>
                </div>

            </div>
            <br/>




            <div class="row-fluid">

                <div class="span12 module_cont module_feature_posts">

                    <h4 class="headInModule">Find out more</h4>

                    <div class="featured_slider">

                        <div class="carouselslider featured_posts items4" data-count="4">

                            <ul class="item_list">



                                <li style="height: 266px; width:266px;">
                                    <a href="{{ url('/') }}/summit/2017/book">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider1.jpg" alt="summit 2016"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_slider">Summit 2017</h4>
                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Invitation to leaders & decision makers from FM, HR, Health & Wellness sectors.</div>
                                            </div>
                                        </div>
                                    </a>

                                </li>



                                <li style="height: 266px; width:266px;">
                                    <a href="nudge_trial">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider2.jpg" alt="summit 2016"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_slider">Wellness Software </h4>
                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Apply here for a FREE TRIAL</div>
                                            </div>
                                        </div>
                                    </a>

                                </li>



                                <li style="height: 266px; width:266px;">
                                    <a href="contact">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider3.jpg" alt="summit 2016"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_slider">Sit-Stand Office Solutions</h4>
                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Apply here for a FREE TRIAL</div>
                                            </div>
                                        </div>
                                    </a>

                                </li>




                                <li style="height: 266px; width:266px;">
                                    <a href="seminars">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider4.jpg" alt="seminars"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_img">Seminars</h4>
                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Contact us today to host an Active Working Seminar.</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>





                                <li style="height: 266px; width:266px;">
                                    <a href="accreditation">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider5.jpg" alt="get started"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_video">Accreditation</h4>

                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Gain a formal recognition of competence in "Active Working".</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>



                                <li style="height: 266px; width:266px;">
                                    <a href="assessments">
                                        <div class="item" style="height: 266px;">
                                            <div class="img_block">
                                                <img src="{{ url('/') }}/img/aw/carousel/slider5.jpg" alt="active working"/><div class="carousel_wrapper"></div><span class="post_type post_type_video"></span></div>
                                            <div class="carousel_title">
                                                <h4 class="featured_ico_slider">Assessments</h4>
                                            </div>
                                            <div class="carousel_desc">
                                                <div class="exc">Achieve good posture when both standing and sitting at your computer</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>








                            </ul>

                        </div>

                        <div class="clear"></div>

                    </div><!-- .featured_slider -->

                </div><!-- .module_cont -->

            </div><!-- .row-fluid -->


        </div> <!--homemaincont-->
    </div><!-- .contentarea -->
@endsection


@section('footer-scripts')
    @parent
    <!-- BELOW AS IT IS SCRIPT TO ENABLE TOP SLIDER CAN LEAVE IN GBS PATH -->
    <script type="text/javascript" src="{{ url('/') }}/js/shared/sliderscript-main.js"></script>

    <script type="text/javascript">

        $(".go-to-nudge").click(function(event){
            window.open('http://activeworking.com/nudge_trial','_blank');
        });

        $(".go-to-careers").click(function(event){
            window.open('http://activeworking.com/careers','_blank');
        });

        $(".go-to-statement").click(function(event){
            window.open('http://activeworking.com/expert_statement','_blank');
        });

        $(".go-to-videos").click(function(event){
            window.open('http://activeworking.com/summit/2016/videos','_blank');
        });

        $(".go-to-summit").click(function(event){
            window.open('http://activeworking.com/summit/2017/book','_blank');
        });

        $(".go-to-who").click(function(event){
            window.open('http://getbritainstanding.org/pdfs/tiny/WHO_Physical_Activity_Strategy_2015.pdf','_blank');
        });
    </script>
@endsection

