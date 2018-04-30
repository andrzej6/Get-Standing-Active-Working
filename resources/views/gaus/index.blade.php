@extends('layouts.gaus.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="css/gaus/index.css">
@endsection


@section('description')
    Get Australia Standing is a campaign to educate on Active Working. Regular minor movement whilst at work is
    essential for us to keep our bodies healthy, prevent illness and relieve stress. Sit-Stand workstations
    enabling us to mix it up between periods of sitting with standing.
@endsection

@section('keywords')
    get-australia-standing, active-working, productive-working, office-productivity, sit-stand, sit-stand-desk,
    standing-desk, height-adjustable-desk,variable-height-desk, healthy-office, treadmill-desk, desk-riser,
    desk-mount, home-office, health-and-safety, wellness
@endsection

@section('title')
    Get Australia Standing. Active and Productive working. Sit-stand solutions.
@endsection




@section('content')
<div class="contentarea">

    <div id="homemaincont">


        <div class="row-fluid">

            <div class="span12 module_cont module_layer_slider">

                <div class="module_content slider_type1">
                    <div id="banner1" class="OneByOne_container">

                        
                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/oyf19-aus.jpg" alt="" class="go-to go-to-oyf">
                        </div>
                       

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider1.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider2.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider3.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider4.jpg" alt="" class="go-to">
                        </div>
						
						
						

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider5.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider6.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider7.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider8.jpg" alt="" class="go-to">
                        </div>

                        <div class="oneByOne_item ls_bg1">
                            <img src="img/getstanding/aus/slider/big/slider9.jpg" alt="" class="go-to">
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- .row-fluid -->


        <div class="row-fluid">

            <div class="halfleft1">

                <div id="leftsitcalc">
                    <h4 class="custom-h4">Australians sit almost 10 hours each day (on average)</h4>
                    In recent years a variety of major international <a href="research">research</a> has produced
                    compelling evidence that sitting for more than 4 hours each day leads to:<br/>
                    <ul>
                        <li>Enzymes responsible for burning harmful blood fats shutting down</li>
                        <li>Reduced calorie burning (Metabolic rate)</li>
                        <li>Disrupted blood sugar levels </li>
                        <li>Increased insulin and blood pressure levels</li>
                        <li>Leg muscles switch off</li>
                    </ul>


                    Irrespective of your level of physical activity, the result leads to increased risks of:<br/><br/>

                    <div class="home-list">

                        <div class="left-list">
                            1. Heart disease<br/>
                            2. Diabetes<br/>
                            3. Obesity<br/>
                            4. Cancer
                        </div>


                        <div class="right-list">
                            5. Back ache<br/>
                            6. Dementia<br/>
                            7. Depression<br/>
                            8. Muscle degeneration
                        </div>
                        <div class="clear"></div>

                    </div>


                    We recommend you calculate the hours you spend sitting on an average "working day". <br/>
                    Make sure you include your sitting time whilst at work, commuting and at home. <br/><br/>

                    <div>Check out the <a href="top10risks">Top 10 health risks</a> which grow
                        for people who sit longer than 4 hours a day.  </div>

                    <div class="gbs-expert">
                        <br/>
                        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
                        jointly commissioned an
                        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
                        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
                    </div>

                </div>

            </div>



            <div class="halfright1">

                <div id="sitcalc">

                    <div class="calc-container">

                        <div class="calc-powered">Powered by &nbsp;<img src="img/getstanding/aus/logos/calc-powered.png" /></div>

                        <div class="calc-icon">
                            <img src="img/general/calculator.png">
                        </div>


                        <div class="calc-icon-right">
                            Estimate the time you spend sitting daily
                        </div>

                        <div class="clear"><!-- ClearFix --></div>

                    </div>

                    <form class="sitting_form" action="#" method="post" name="sitting_form">

                        <ul>

                            <li>
                                <label for="eatinput">  Eating (combination of  breakfast, lunch and dinner time)</label>

                                <select name="input-select-eating" class="input-select" id="eatinput">
                                </select>

                                <input type="range" id="eatslider" class="vslider" min="0.00" max="8" step="0.25" value="0" >
                            </li>

                            <li>

                                <label for="comuttinput">Commuting</label>
                                <select name="input-select-comutting" class="input-select" id="comuttinput">
                                </select>

                                <input type="range" id="comuttslider" class="vslider" min="0.00" max="8" step="0.25" value="0">
                            </li>

                            <li>
                                <label for="workinput">Working (both at the office or home)</label>

                                <select name="input-select-working" class="input-select" id="workinput">
                                </select>

                                <input type="range" id="workslider" class="vslider" min="0.00" max="8" step="0.25" value="0">
                            </li>

                            <li>
                                <label for="relaxinput">Relaxing (including watching TV, online, gaming etc.)</label>
                                <select name="input-select-relaxing" class="input-select" id="relaxinput">
                                </select>

                                <input type="range" id="relaxslider" class="vslider" min="0.00" max="8" step="0.25" value="0">
                            </li>

                            <li>
                                <a href="" id="calculate" class="shortcode_button btn_small btn_type10">CALCULATE</a>
                                <a href="" id="clearselection" class="shortcode_button btn_small btn_type10">Start again</a>

                                <div style="clear: both;"></div>
                                <div id="resultcalc"></div>

                            </li>

                        </ul>


                    </form>


                </div> <!-- sitcalc-->

            </div>

            <div class="clear"></div>

        </div><!-- .row-fluid -->



        <div class="row-fluid">
            <div class="span3 module_cont module_iconboxes">
                <a href="top10risks">
                    <div class="shortcode_iconbox">
                        <div class="ico">e</div>
                        <h4>Health Risks</h4>
                        <p>When sitting more than 4 hours a day. This may raise your eyebrows.</p>
                    </div>
                </a>
            </div><!--.module_cont -->


            <div class="span3 module_cont module_iconboxes">
                <a href="solutions">
                    <div class="shortcode_iconbox">
                        <div class="ico">u</div>
                        <h4>Solutions</h4>
                        <p>Sit-Stand solutions for every budget and simple tips for "Active Working".</p>
                    </div>
                </a>
            </div><!--.module_cont -->


            <div class="span3 module_cont module_iconboxes">
                <a href="sitting_cost">
                    <div class="shortcode_iconbox">
                        <div class="ico">7</div>
                        <h4>Employers</h4>
                        <p>Higher productivity and better engagement. Learn more ... &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </div>
                </a>
            </div><!--.module_cont -->


            <div class="span3 module_cont module_iconboxes">
                <a href="start">
                    <div class="shortcode_iconbox">
                        <div class="ico">a</div>
                        <h4>Individuals</h4>
                        <p>You will burn lots more calories and become healthier. Find out more ...</p>
                    </div>
                </a>
            </div><!--.module_cont -->


        </div><!-- .row-fluid -->



        <div>

            <div>
                <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20Australia%20Standing" target="_blank">
                    <img src="img/getstanding/aus/slider/thin/slider1.jpg">
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



						<!--
                            <li style="height: 266px; width:266px;">
                                <a href="aw_summit" target="_blank">

                                    <div class="item" style="height: 266px;">

                                        <div class="img_block">
                                            <img src="img/getstanding/aus/carousel/slider1.jpg" alt="summit 2017"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>

                                        <div class="carousel_title">
                                            <h4 class="featured_ico_slider">Summit 2017</h4>
                                        </div>

                                        <div class="carousel_desc">
                                            <div class="exc">Invitation to leaders & decision makers from FM, HR, Health & Wellness sectors.</div>
                                        </div>

                                    </div>

                                </a>
                            </li>
							
							-->


                            <li style="height: 266px; width:266px;">
                                <a href="top10risks">

                                    <div class="item" style="height: 266px;">

                                        <div class="img_block">
                                            <img src="img/getstanding/general/carousel/slider2.jpg" alt="top 10 risks"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>

                                        <div class="carousel_title">
                                            <h4 class="featured_ico_video">Top 10 Risks</h4>
                                        </div>

                                        <div class="carousel_desc">
                                            <div class="exc">Key health risks you face when sitting more than 4 hours each day.</div>
                                        </div>

                                    </div>

                                </a>
                            </li>


                            <li style="height: 266px; width:266px;">
                                <a href="introduction">

                                    <div class="item" style="height: 266px;">

                                        <div class="img_block">
                                            <img src="img/getstanding/general/carousel/slider3.jpg" alt="active working"/><div class="carousel_wrapper"></div><span class="post_type post_type_video"></span></div>

                                        <div class="carousel_title">
                                            <h4 class="featured_ico_slider">Active Working</h4>
                                        </div>

                                        <div class="carousel_desc">
                                            <div class="exc">Simple solutions to encourage standing and movement at work.</div>
                                        </div>

                                    </div>

                                </a>
                            </li>


                            <li style="height: 266px; width:266px;">
                                <a href="media">

                                    <div class="item" style="height: 266px;">

                                        <div class="img_block">
                                            <img src="img/getstanding/general/carousel/slider5.jpg" alt="media and sit-stand"/><div class="carousel_wrapper"></div><span class="post_type post_type_image"></span></div>

                                        <div class="carousel_title">
                                            <h4 class="featured_ico_slider">Media</h4>
                                        </div>

                                        <div class="carousel_desc">
                                            <div class="exc">See what the media are<br/>saying about sitting.</div>
                                        </div>

                                    </div>

                                </a>
                            </li>


                            <li style="height: 266px; width:266px;">
                                <a href="research">

                                    <div class="item" style="height: 266px;">

                                        <div class="img_block">
                                            <img src="img/getstanding/general/carousel/slider6.jpg" alt="research sit-stand"/><div class="carousel_wrapper"></div><span class="post_type post_type_video"></span></div>

                                        <div class="carousel_title">
                                            <h4 class="featured_ico_video">Research</h4>
                                        </div>

                                        <div class="carousel_desc">
                                            <div class="exc">Dig deeper into the scientific research, studies, and surveys.</div>
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
    <script type="text/javascript" src="js/gaus/calculator.js"></script>
    <!-- BELOW AS IT IS SCRIPT TO ENABLE TOP SLIDER CAN LEAVE IN GBS PATH -->
    <script type="text/javascript" src="js/shared/sliderscript-main.js"></script>
@endsection

