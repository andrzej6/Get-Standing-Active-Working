@extends('layouts.registrations')

@section('inlinestyle')
    <link rel="stylesheet" type="text/css" href="css/regs.css">
@endsection

@section('description')
    Registrations
@endsection

@section('title')
    {{$country}} Registrations
@endsection

@section('pagetitle')
    {{$country}} Registrations
@endsection


@section('content')


    <a href="#" id="aw-addressinfo">Address info</a>&nbsp;&nbsp;
    <a href="#" id="aw-addinfo">Additional info</a>&nbsp;&nbsp;
    <a href="#" id="aw-payinfo" style="color: rgba(43, 38, 37, 0.6);">Payment Info</a>
    <br/><br/>



    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>REF</th>
            <th>organization</th>
            <th>position</th>
            <th>department</th>
            <th>supplier</th>
            <th>phone</th>
            <th>email</th>

            <th class="taddress">street</th>
            <th class="taddress">town</th>
            <th class="taddress">county</th>
            <th class="taddress">postcode</th>
            <th class="taddress">country</th>


            <th class="tadd">dietary</th>
            <th class="tadd">allergy</th>
            <th class="tadd">assistance</th>
            <th class="tadd">correspondence</th>
            <th class="tadd">member</th>
            <th>date_created</th>

            <th class="tpay">payment_status</th>
            <th class="tpay">payment_amount</th>
            <th class="tpay">selected_option</th>
            <th class="tpay">trans_id</th>

        </tr>
        </thead>


        @foreach ($customers as $customer)


            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->REF}}</td>
                <td>{{$customer->organization}}</td>
                <td>{{$customer->position}}</td>
                <td>{{$customer->department}}</td>
                <td>{{$customer->supplier}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>

                <td class="taddress">{{$customer->street}}</td>
                <td class="taddress">{{$customer->town}}</td>
                <td class="taddress">{{$customer->county}}</td>
                <td class="taddress">{{$customer->postcode}}</td>
                <td class="taddress">{{$customer->country}}</td>

                <td class="tadd">{{$customer->dietary}}</td>
                <td class="tadd">{{$customer->allergy}}</td>
                <td class="tadd">{{$customer->assistance}}</td>
                <td class="tadd">{{$customer->correspondence}}</td>
                <td class="tadd">{{$customer->member}}</td>
                <td><?php  print date("Y-m-d", strtotime($customer->date_created)); ?></td>

                <td class="tpay">{{$customer->payment_status}}</td>
                <td class="tpay">{{$customer->payment_amount}}</td>
                <td class="tpay">{{$customer->selected_option}}</td>
                <td class="tpay">{{$customer->transaction_id}}</td>

            </tr>

        @endforeach


    </table>


    <div id="media-pagination">
        {!! $customers->render() !!}
    </div>



@endsection

