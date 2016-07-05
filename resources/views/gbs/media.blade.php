@extends('layouts.gbs.plain')

@section('header-styles')
    <link rel="stylesheet" type="text/css" href="css/gbs/media.css">
@endsection

@section('description')
    What the British media -BBC, press and radio- are saying about sitting and sit-stand.
@endsection

@section('keywords')
    get-britain-standing, active-working, productive-working, office-productivity, sit-stand,
    media-BBC-sit-stand, press–radio-sit-stand, sit-stand-desk, standing-desk, height-adjustable-desk, healthy-office
@endsection

@section('title')
    What the British media are saying about Sitting and Sit-Stand
@endsection


@section('content')
<div class="contentarea">
    <div class="row-fluid">
        @include('shared.gbs.trail')
        <br/>

        <h1>What do the British media say about sitting?</h1>
        <br/>

        @foreach ($articles as $article)

            <div class="mediarow">
                <div class="medialeft">
                    <a href="{{$article->mlink}}" target="_blank">
                        <img src="img/general/media/{{$article->logo}}" width="88" height="88" class="alignleft" alt=""/>
                    </a>
                </div>

                <div class="mediatitle">
                    <strong>{{$article->title}}</strong><br/>
                    {{date_format(new DateTime($article->date_posted), 'jS M Y')}}
                </div>


                <div  class="mediaright">
                    <a href="{{$article->alink}}"
                       target="_blank" class="shortcode_button btn_small btn_type6">
                        Read more</a>
                </div>

                <div class="clear"></div>
            </div>
            <br/>

        @endforeach

        <div id="media-pagination">
        {!! $articles->render() !!}
        </div>


    </div>
</div>
@endsection
