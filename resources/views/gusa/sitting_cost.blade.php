@extends('layouts.gusa.basic-sub')


@section('description')
    Significant productivity gains and wellness improvements for your employees. Absenteeism, presenteeism,
    poor engagement and sickness leave are very expensive to employers
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, productivity-improvements, sit-stand-solutions,
    sit-stand-information, absenteeism, wellbeing-engagement, presenteeism, poor-engagement,
    sickness-leave, sit-stand-desk, ergonomic, workstation, healthy-office
@endsection

@section('title')
    Costs of Prolonged Sitting to the Employer, Costs of Absenteeism, Cost of Presenteeism.
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg1">
                        <img src="img/aw/slider/subpage/accreditation2.jpg" alt="microsoft">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    <div class="row-fluid">

        @include('shared.trail')
        <br/>

        <h1 class="activeworking"> Costs of Prolonged Sitting to the Employer</h1>


        Sitting for prolonged periods (longer than 30 minutes at a time) and excessively
        (more than 4 hours per day in the office) contributes to a variety of human factor
        costs which directly hits the bottom line of American business today:  <br/><br/>

        <div class="span12 module_cont module_toggle">

            <div class="shortcode_toggles_shortcode toggles">

                <h5 class="shortcode_toggles_item_title expanded_no" data-count="1">
                    1.&nbsp; Costs of Absenteeism:
                    <span class="ico"></span>
                </h5>

                <div class="shortcode_toggles_item_body">
                    <div class="ip">

                        <div class="darkgreytext">
                            <ul>
                                <!--
                                <li>The average firm of 250 employees loses £4,800 per week due to sickness absence (ONS)</li>
                                <li>A Confederation of British Industry (CBI) survey, estimates employee absences incur a £15bn cost to the economy p.a.</li>
                                <li>8.2 million Work days are lost due to mental health and stress related problems. 270,000 employees take time off work for
                                    stress related disorders.</li>
                                <li>The TUC estimates that British businesses lose 4.9m days to employee absenteeism through work related back pain at a
                                    cost £5bn p.a. </li>
                                 -->
                                <li>Absenteeism in the workplace can fall by as much as 42% through wellness programs</li>
                            </ul>

                        </div>

                    </div>

                </div>


                <h5 class="shortcode_toggles_item_title expanded_no" data-count="2">
                    2. Cost of Presenteeism:
                    <span class="ico"></span>
                </h5>

                <div class="shortcode_toggles_item_body">
                    <div class="ip">
                        <div class="darkgreytext">
                            <ul>
                                <li>Reduced productivity when employees come to work disengaged or perform at lower levels as a result of ill health. </li>
                                <!--
                                <li>The Centre for Mental Health calculated that presenteeism from mental ill health costs the UK economy £15.1 billion p.a</li>
                                -->
                            </ul>

                        </div>

                    </div>
                </div>


                <h5 class="shortcode_toggles_item_title expanded_no" data-count="2">
                    3. Increased Productivity, Engagement and Wellbeing:
                    <span class="ico"></span>
                </h5>

                <div class="shortcode_toggles_item_body">
                    <div class="ip">

                        <div class="darkgreytext">
                            <ul>
                                <li>Users of Sit- Stand workstations unanimously claim to be more alert, task-driven and positive. </li>
                                <li>Research shows a direct link between healthy employees and improved performance. </li>
                                <li>Meetings are kept short and efficient. </li>
                                <li>Better posture and reduced risk of back pain.</li>
                                <li>Higher energy levels, especially afternoons. </li>

                            </ul>
                        </div>

                    </div>
                </div>


            </div><!--.shortcode_toggles_shortcode-->

        </div><!-- .module_cont -->




        <div class="link-line">
            If you need help preparing the business case for Active Working within your company,
            <a href="contact">Contact Us</a> as we be delighted to help. The vast majority of
            companies who have introduced sit-stand have lost much of the opportunity by failing to correctly educate and monitor behaviour change.
        </div>

    </div>

@endsection


@section('content-restofsmall')


    <a href="http://onyourfeetday.com" target="_blank" class="darken">
        <img src="img/getstanding/usa/ads/oyf.jpg" alt="advert" />
    </a>


    <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20America%20Standing"
       class="darken">
        <img src="img/getstanding/usa/ads/supporters/join-us.png" />
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

