{{-- */
$downloads = array(
'1'=>array('header'=>'Event Preparation', 'elem'=> array(
        '1'=>array('label'=>'Poster A1','title'=>'Workplace Guide','name'=>'a1'),
        '2'=>array('label'=>'Flyer A2','title'=>'Download Poters Today','name'=>'a2'),
        '3'=>array('label'=>'Poster A3','title'=>' Workplace Champion Marco','name'=>'a3-1'),
        '4'=>array('label'=>'Poster A4','title'=>'Workplace Champion Trudi','name'=>'a3-2'),
        '5'=>array('label'=>'Poster A5','title'=>'Date for your diary','name'=>'a4')
        )),
'2'=>array('header'=>'Event Execution (password required)', 'elem'=> array(
        '1'=>array('label'=>'Poster B1','title'=>'10 Ways to Sit Less at Work','name'=>'b1'),
        '2'=>array('label'=>'Poster B2','title'=>'Sitting Increases Health Risks','name'=>'b2'),
        '3'=>array('label'=>'Poster B3','title'=>'Sitting Calculator','name'=>'b3'),
        '4'=>array('label'=>'Poster B4','title'=>'Benefits of Sitting Less','name'=>'b4'),
        '5'=>array('label'=>'Poster B5','title'=>'Stand and Deliver','name'=>'b5'),
        '6'=>array('label'=>'Poster B6','title'=>'Get up Every 30 Minutes','name'=>'b6'),
        '7'=>array('label'=>'Poster B7','title'=>'Walk and Talk - Ban Emails Today','name'=>'b7'),
        '8'=>array('label'=>'Poster B8','title'=>'Try Walking Meeting','name'=>'b8'),
        '9'=>array('label'=>'Poster B9','title'=>'Take Stairs Rather Than Lift','name'=>'b9'),
        '10'=>array('label'=>'Poster B10','title'=>'Take Every Opportunity to Get Up and Move','name'=>'b10'),
        '11'=>array('label'=>'Poster B11','title'=>'Team Stretching','name'=>'b11'),
        '12'=>array('label'=>'Poster B12','title'=>' What will you do?','name'=>'b12')
)),
'3'=>array('header'=>'Desk Display', 'elem'=> array(
        '1'=>array('label'=>'Display C1','title'=>'OYFB Triangle 1','name'=>'c1'),
        '2'=>array('label'=>'Display C2','title'=>'OYFB Triangle 2','name'=>'c2'),
        '3'=>array('label'=>'Display C3','title'=>'OYFB Triangle 3','name'=>'c3'),
        '4'=>array('label'=>'Display C4','title'=>'OYFB Triangle 4','name'=>'c4'),
)),

'4'=>array('header'=>'Event Completion', 'elem'=> array(
        '1'=>array('label'=>'Certificate D1','title'=>' OYFB Certificate','name'=>'d1')
))

);
/* --}}

@extends('layouts.oyf.irl')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/oyf/download.css">
@endsection


@section('description')
    On Your Feet. Regular minor movement whilst at work is essential for us to
    keep our bodies healthy, prevent illness and relieve stress. Sit-Stand workstations
    enabling us to mix it up between periods of sitting with standing.
@endsection

@section('keywords')
    on-your-feet, active-working, productive-working, office-productivity, sit-stand,
    sit-stand-desk, standing-desk, height-adjustable-desk,
    variable-height-desk, healthy-office, treadmill-desk, desk-riser, desk-mount, home-office,
    health-and-safety, wellness
@endsection

@section('title')
    On Your Feet Ireland
@endsection



@section('aw-maincontent')

    <h1 class="oyf-newpink">Downloads (register to get password)</h1>


    <div class="oyf-downloads-container">

        @foreach ($downloads as $key1=>$value1)

            <div class="oyf-newblue fbigger fbold fmargb">{{$value1['header']}}</div>
            <br/>

            @foreach ($value1['elem'] as $key=>$value)
                <div class="oyf-downloads-row">

                    <div class="oyf-downloads-pic">
                        <a href="{{ url('/') }}/pdfs/oyf/irl/{{$value['name']}}.pdf" target="_blank">
                            <img src="{{ url('/') }}/img/oyf/irl/downloads/{{$value['name']}}.jpg"/>
                        </a>
                    </div>

                    <div class="oyf-downloads-descrip">
                        <div class="oyf-downloads-desc1">
                                 	 	  		<span class="oyf-downloads-tabbed">
                                 	 	  			<a href="{{ url('/') }}/pdfs/oyf/irl/{{$value['name']}}.pdf" target="_blank">
                                                        {{$value['label']}}
                                                    </a>
                                 	 	  		</span>

                            <a href="{{ url('/') }}/pdfs/oyf/irl/{{$value['name']}}.pdf" target="_blank">
                                {{$value['title']}}
                            </a>
                        </div>


                        <div class="oyf-downloads-desc2">
                            <span class="oyf-downloads-tabbed"> </span>
                            <i></i>
                        </div>

                    </div>

                    <div class="oyf-downloads-helper">
                    </div>
                    <div class="clear"></div>

                </div><!-- row -->

                <br/>
            @endforeach


            <br/><br/>
        @endforeach


    </div><!-- container -->


@endsection

