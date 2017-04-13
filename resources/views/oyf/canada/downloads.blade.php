{{-- */
$downloads = array(
'1'=>array('header'=>'Event Preparation', 'elem'=> array(
        '1'=>array('label'=>'Poster A1','title'=>'Workplace Guide','name'=>'a1'),
        '2'=>array('label'=>'Flyer A2','title'=>'Sign Up Today','name'=>'a2'),
        '3'=>array('label'=>'Poster A3','title'=>' Workplace Champion Alice','name'=>'a3-1'),
        '4'=>array('label'=>'Poster A4','title'=>'Workplace Champion Jim','name'=>'a3-2'),
        '5'=>array('label'=>'Poster A5','title'=>'Poster','name'=>'a5')
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

'4'=>array('header'=>'Event Completion', 'elem'=> array(
        '1'=>array('label'=>'Certificate D1','title'=>' OYFB Certificate','name'=>'d1')
)),

'5'=>array('header'=>'Emails for Workplace Champion', 'elem'=> array(
        '1'=>array('label'=>'Email E1','title'=>' On Your Feet Canada Introduction','name'=>'e1'),
        '2'=>array('label'=>'Email E2','title'=>' On Your Feet Canada Getting Ready','name'=>'e2'),
        '3'=>array('label'=>'Email E3','title'=>' On Your Feet Canada Event Launch Notification ','name'=>'e3'),
       '4'=>array('label'=>'Email E4','title'=>' On Your Feet Canada Thank you','name'=>'e4')
)),


);
/* --}}

@extends('layouts.oyf.can')

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
    On Your Feet Canada
@endsection



@section('aw-maincontent')

    <h1 class="oyf-newpink">Downloads (register to get password)</h1>


    <div class="oyf-downloads-container">

        @foreach ($downloads as $key1=>$value1)

            <div class="oyf-newblue fbigger fbold fmargb">{{$value1['header']}}</div>
            <br/>

            @if ($key1=='5')

                @foreach ($value1['elem'] as $key=>$value)
                    <div class="oyf-downloads-row">

                        <div class="oyf-downloads-pic">
                            <a href="{{ url('/') }}/pdfs/oyf/can/{{$value['name']}}.docx" target="_blank">
                                <img src="{{ url('/') }}/img/oyf/gb/downloads/17/{{$value['name']}}.jpg"/>
                            </a>
                        </div>

                        <div class="oyf-downloads-descrip">
                            <div class="oyf-downloads-desc1">
                                 	 	  		<span class="oyf-downloads-tabbed">
                                 	 	  			<a href="{{ url('/') }}/pdfs/oyf/can/{{$value['name']}}.docx" target="_blank">
                                                        {{$value['label']}}
                                                    </a>
                                 	 	  		</span>

                                <a href="{{ url('/') }}/pdfs/oyf/can/{{$value['name']}}.docx" target="_blank">
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

            @else

                @foreach ($value1['elem'] as $key=>$value)
                    <div class="oyf-downloads-row">

                        <div class="oyf-downloads-pic">
                            <a href="{{ url('/') }}/pdfs/oyf/can/17/{{$value['name']}}.pdf" target="_blank">
                                <img src="{{ url('/') }}/img/oyf/pics/{{$value['name']}}.jpg"/>
                            </a>
                        </div>

                        <div class="oyf-downloads-descrip">
                            <div class="oyf-downloads-desc1">
                                 	 	  		<span class="oyf-downloads-tabbed">
                                 	 	  			<a href="{{ url('/') }}/pdfs/oyf/can/17/{{$value['name']}}.pdf" target="_blank">
                                                        {{$value['label']}}
                                                    </a>
                                 	 	  		</span>

                                <a href="{{ url('/') }}/pdfs/oyf/can/17/{{$value['name']}}.pdf" target="_blank">
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

            @endif


            <br/><br/>
        @endforeach


    </div><!-- container -->


@endsection

