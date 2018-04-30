@extends('layouts.gaus.basic-sub')

@section('description')
    Major health risks result from excessive sitting. Sitting time at work and leisure has increased
    dramatically in recent decades.
@endsection

@section('keywords')
    health-risks, sedentary, sitting, lifestyles, heart-disease, diabetes, cancer, obesity, dementia, depression,
    back-ache, active-working, productive-working, office-productivity, sit-stand, healthy-office, health-and-safety,
    wellness
@endsection

@section('title')
    The Sitting Problem. Excessive sitting.
@endsection



@section('content-smallwidth')
    <div class="row-fluid slider-small">

        <div class="span12 module_cont module_layer_slider">

            <div class="module_content slider_type1">

                <div id="banner1" class="OneByOne_container">

                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/aus/slider/subpage/90percent.png" alt="not breaking fat when sitting">
                    </div>


                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/aus/slider/subpage/90min-allred.png" alt="prolonged sitting">
                    </div>

                </div>

            </div>

        </div>

    </div><!-- .row-fluid -->

    @include('shared.trail')
    <br/>

    <h1>The Sitting Problem</h1>


    <div class="halfleft">

        <div class="bluetitle">Introduction</div>


        <strong>
            The World Health Organization now ranks physical inactivity as 4th largest killer globally.
        </strong>
        <br/><br/>
        Throughout Australia we have lost more than half of the physical activity in the workplace.
        <br/><br/>
        Furthermore it turns out that even if you achieve all your physical activity goals but remain seated 8
        or more hours a day, you can’t undo the negative effects of excessive sitting. <br/><br/>
        Our bodies are designed to stand and move for long periods of time and we automatically shift our
        weight and move around while standing. Standing initiates key physiological processes and prevents
        both the repetitive stress and muscle degeneration that is caused by sitting.
        <strong>
            But the simple fact is that there is NO correct prolonged sitting position.
        </strong>
        <br/><br/>

        <strong>
            In recent years a new kid has emerged on the science block. That kid is called "Sedentary Behaviour",
            and it’s beginning to get noticed for all the right reasons.
        </strong>

    </div><!-- .row-fluid -->


    <div class="halfright">

        <div class="bluetitle">Australian Workplace and Sitting</div>

        The average Australian worker spends almost 33 <a href="research"><sup>1</sup></a>
        hours per week at the workplace. Those working full time in jobs that involve ‘mostly sitting’ spend on

        <strong>average 6.3 hours per day sitting at work </strong><a href="research"><sup>2</sup></a>.
        <br/><br/>

        There are currently no Australian Government’s Department of Health guidelines on how long adults
        should sit. In 2015 the British Journal for Sports Medicine published the first
        <a href="expert_statement">expert statement</a> recommending accumulation
        of two hours a day of standing and light
        activity during working hours, eventually progressing to four. The recommendations come from
        an international group of experts, including the Head of Physical Activity Research at Baker
        IDI Heart and Diabetes Institute, <a href="partners">Professor David Dunstan</a>, who say there is a growing
        case for change towards better health and productivity based on the current body of scientific evidence.
        <br/><br/>

        Key studies <a href="research"><sup>3, 4</sup></a> from Australia have demonstrated a potential ameliorating influence of workplace
        interventions, which promote standing breaks and/or the on-going use of sit–stand adjustable workstations.
        The “Stand @ Work study” conducted in Sydney investigated the feasibility of such standing desks.
        The intervention was successful at reducing sitting time via use of sit-stand work stations
        by almost 20% <a href="research"><sup>5</sup></a>.
        <br/><br/>


        <div class="preq">
            Professor David Dunstan, Head, Physical Activity Laboratory Baker IDI
        </div>

        <br/>

        <div class="propq">
            <strong>
                "Many Australians are sitting longer than they are sleeping – sitting longer than 8hrs a day
                can increase risk of early death by 15%- focus on breaking up long periods into shorter periods
                by getting up and moving"
            </strong>
        </div>

    </div>

    <div class="clear"></div>

    <div class="gbs-expert">
        <br/>
        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
        (owners of the Get Australia Standing campaign) jointly commissioned an
        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
        <br/><br/>
    </div>

@endsection


@section('content-restofsmall')
    <img src="img/getstanding/aus/ads/message/avoid.png" class="restofsmall-pic" alt="avoid"/>


    <a href="http://www.workingcommercial.com.au/" target="_blank" class="sup-nobg">
        <img src="img/getstanding/aus/ads/supporters/working_commercials.jpg" alt="advert" /> <br/>
    </a>


    <a href="http://onyourfeetday.com/australia" class="darken" target="_blank">
        <img src="img/getstanding/aus/ads/oyf/oyf19-aus.png" alt="oyf"/>
    </a>

    <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20Australia%20Standing"
       class="darken">
        <img src="img/getstanding/aus/ads/supporters/join-us.png" />
    </a>

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

