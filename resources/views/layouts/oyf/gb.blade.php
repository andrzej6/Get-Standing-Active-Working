{{-- */
$sidemenu=array('index'=>'Event','challenge'=>'Challenge','partners'=>'Partners','downloads'=>'Downloads','winners'=>'Previous Winners',);
/* --}}

<!--
older:
$sidemenu=array('index'=>'Event','challenge'=>'Challenge','partners'=>'Partners','downloads'=>'Downloads','giveaway'=>'£25,000 Giveaway','winners'=>'Previous Winners',);
-->

@extends('layouts.oyf')

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/britain/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
    <a href="{{ url('/') }}/signup"><li>Register</li></a>
@endsection


@section('partnersleft')
    @include('shared.oyf.gb.partnersleft')
    <hr class="light" style="height:0;">
    @include('shared.oyf.gb.partnersleft')

	{{--
    @if($page == 'downloads')
        <hr class="light" style="height:0;">
        @include('shared.oyf.gb.partnersleft')
        <hr class="light" style="height:0;">
        @include('shared.oyf.gb.partnersleft')
    @endif
	
	--}}

@endsection


@section('oyf-slider')
    <div class="span12 module_cont module_layer_slider">
        <div class="module_content slider_type1">
            <div id="banner1" class="OneByOne_container">

               <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf1.png" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf2.png" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf3.png" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf4.png" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				

                <!--
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/gb/slider/oyf18-amy.jpg" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/gb/slider/oyf18-andy.jpg" alt="" class="go-to-onyourfeet-download-uk go-to">
                </div>
				
				 <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/gb/slider/oyf18-josh.jpg" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/gb/slider/oyf18-sally.jpg" alt="" class="go-to-onyourfeet-download-uk go-to">
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/oyf-promo.jpg" alt="" class="go-to-oyfoffer go-to">
                </div>


                -->

            </div>
        </div>

    </div>
@endsection


@section('aw-restofsmall')
    @include('shared.oyf.gb.partnersright')
@endsection
