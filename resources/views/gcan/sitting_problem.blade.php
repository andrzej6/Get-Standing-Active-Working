@extends('layouts.gcan.basic-sub')

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
                        <img src="img/getstanding/can/slider/subpage/90percent.png" alt="not breaking fat when sitting">
                    </div>


                    <div class="oneByOne_item ls_bg1">
                        <img src="img/getstanding/can/slider/subpage/90min-allred.png" alt="prolonged sitting">
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
            The World Health Organization now ranks physical inactivity as 4th largest killer globally, behind obesity.
        </strong>
        <br/><br/>
        Throughout Canada we continue to sit more at every stage in life; as kids, working adults and
        in care homes. In the 1960’s over 50% of us had moderate physical activity incorporated in our
        work places, but today that figure is less than 15%.
        <br/><br/>
        Modern technology and computer based work has made us more sedentary, though until recently few
        questioned that technical advance could be negatively impacting our health.<br/><br/>

        Furthermore it turns out that even if you are hitting all your physical activity goals but remain
        seated 8 or more hours a day you can’t undo the negative effects of too much sitting. Accordingly,
        we must create ways for all of us to moving more throughout the day.
        <strong>
            In recent years a new kid has emerged on the science block. That kid is called "Sedentary Behavior",
            and it’s beginning to get noticed for all the right reasons.
        </strong>


    </div><!-- .row-fluid -->


    <div class="halfright">

        <div class="bluetitle">Canadian Workplace and Sitting</div>

        Under Canadian workplace law there is no current guidance on how to reduce sitting time in the office.
        The Government of Canada’s Labour Program notes that prolonged sitting can result in back pain,
        and suggest minor adjustments (screen and keyboard height, etc) to avoid these issues.

        <strong>But the simple fact is that there is NO correct prolonged sitting position.  </strong><br/><br/>

        Our bodies are designed to stand and move for long periods of time. And we automatically shift
        our weight and move around while standing. Standing initiates key physiological processes
        and prevents both the repetitive stress and muscle degeneration that is caused by sitting. <br/><br/>

        The Canadian Centre for Occupational Health and Safety (COHS) is the official government agency
        responsible for the workplace. Federal regulations were last updated in 2007 with Part XIX of
        the COHS call on employers to incorporate ergonomic-related hazards responsible for the
        development of MSDs into their legally mandated workplace Hazard Prevention Program.<br/><br/>


        Typically the act of sitting is rarely viewed as a health and safety concern. When it is considered
        the link is limited to Musculoskeletal Disorders (or MSDs) meaning injuries and disorders that
        affect the human body's movement or musculoskeletal system (i.e. muscles, tendons, ligaments,
        nerves, discs, blood vessels. <br/><br/>


        <div class="preq">
            Dr Stuart Biddle, Professor of Active Living & Public Health, Victoria University, Australia.
        </div>

        <br/>

        <div class="propq">
            <strong>
                "Even if you exercise for at least 30 minutes most days, you are still storing up
                health problems from being sedentary too much. The message is clear - move more and sit less"
            </strong>
        </div>

    </div>

    <div class="clear"></div>

    <div class="gbs-expert">
        <br/>
        In January 2015 <strong>Public Health England </strong> and  <strong>Active Working C.I.C </strong>
        (owners of the Get Canada Standing campaign) jointly commissioned an
        <a href="expert_statement">Expert Statement</a> on the status and impact of prolonged sitting in the office
        <a href="pdfs/gbs/expert_statement.pdf">(Download)</a>.
        <br/><br/>
    </div>

@endsection


@section('content-restofsmall')

    <a href="http://onyourfeetday.com/canada" class="darken" target="_blank">
        <img src="img/getstanding/can/ads/oyf/oyf18f.jpg" alt="oyf"/>
    </a>
	
    <img src="img/getstanding/can/ads/message/avoid.png" class="restofsmall-pic" alt="avoid"/>


    <a href="https://itunes.apple.com/us/app/got-a-minute-for-your-health/id904412914?ls=1&mt=8/" target="_blank" class="sup-nobg">
        <img src="img/getstanding/can/ads/supporters/got-1-minute.jpg" alt="advert" /> <br/>
    </a>

    <a href="http://www.fellowes.com/" target="_blank">
        <img src="img/getstanding/can/ads/supporters/fellowes-can.jpg" alt="sit-stand advert" /> <br/>
    </a>


    <!--
    <a href="aw_summit" class="darken">
        <img src="img/getstanding/can/ads/summit2016-aw.jpg" alt="summit 2016"/>
    </a>
    

    <a href="mailto:partnerships@activeworking.com?Subject=Official%20Supporters%20%2D%20Get%20Canada%20Standing"
       class="darken">
        <img src="img/getstanding/can/ads/supporters/join-us.png" />
    </a>
	-->

@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

