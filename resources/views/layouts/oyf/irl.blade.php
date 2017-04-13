{{-- */
$sidemenu=array('index'=>'Event','downloads'=>'Downloads');
/* --}}

@extends('layouts.oyf')

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/ireland/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
    <a href="{{ url('/') }}/signup"><li>Register</li></a>
@endsection


@section('partnersleft')
    @include('shared.oyf.irl.partnersleft')
@endsection


@section('oyf-slider')
    <div class="span12 module_cont module_layer_slider">
        <div class="module_content slider_type1">
            <div id="banner1" class="OneByOne_container">

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/irl/slider/oyf-irl1.jpg" alt="" class="go-to-onyourfeet-r">
                </div>

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf-promo.jpg" alt="" class="go-to-oyfoffer go-to">
                </div>

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/irl/slider/oyf-irl2.jpg" alt="" class="go-to-onyourfeet-r">
                </div>

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf-promo.jpg" alt="" class="go-to-oyfoffer go-to">
                </div>


                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/irl/slider/oyf-irl3.jpg" alt="" class="go-to-onyourfeet-r">
                </div>

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf-promo.jpg" alt="" class="go-to-oyfoffer go-to">
                </div>


            </div>
        </div>

    </div>
@endsection


@section('aw-restofsmall')
    @include('shared.oyf.irl.partnersright')
@endsection
