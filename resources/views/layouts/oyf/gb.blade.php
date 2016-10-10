{{-- */
$sidemenu=array('index'=>'Event','challenge'=>'Challenge','partners'=>'Partmers','downloads'=>'Downloads');
/* --}}

@extends('layouts.oyf')

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/britain/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
    <a href="{{ url('/') }}/signup"><li>Register</li></a>
@endsection


@section('partnersleft')
    @include('shared.oyf.gb.partnersleft')
    <hr class="light">
    @include('shared.oyf.gb.partnersleft')
@endsection


@section('oyf-slider')
    <div class="span12 module_cont module_layer_slider">
        <div class="module_content slider_type1">
            <div id="banner1" class="OneByOne_container">

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/gb/slider/oyf-gb.jpg" alt="" class="go-to-onyourfeet1">
                </div>

            </div>
        </div>

    </div>
@endsection


@section('aw-restofsmall')
    @include('shared.oyf.gb.partnersright')
@endsection