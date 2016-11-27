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


    <table class="table">
        <thead>
        <tr>
            <th>title</th>
            <th>firstname</th>
            <th>last name</th>
            <th>email</th>
            <th>workphone</th>
            <th>mobile</th>
            <th>company</th>
            <th>address1</th>
            <th>address2</th>
            <th>postcode</th>
            <th>city</th>
            <th>county</th>
            <th>job position</th>
            <th>department</th>
            <th>on behalf</th>
            <th>question</th>
            <th>extra</th>
            <th>date</th>
        </tr>
        </thead>


        @foreach ($customers as $customer)


            <tr>
                <td>{{$customer->title}}</td>
                <td>{{$customer->fname}}</td>
                <td>{{$customer->lname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->workphone}}</td>
                <td>{{$customer->mobilephone}}</td>
                <td>{{$customer->ename}}</td>
                <td>{{$customer->address1}}</td>
                <td>{{$customer->address2}}</td>
                <td>{{$customer->postcode}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->county}}</td>

                <td>{{$customer->jpos}}</td>
                <td>{{$customer->dep}}</td>
                <td>{{$customer->behalf}}</td>
                <td class="question smallfont">{{$customer->fquest}}</td>
                <td >{{$customer->extras}}</td>
                <td><?php  print date("Y-m-d", strtotime($customer->created_at)); ?></td>
            </tr>

        @endforeach


    </table>


    <div id="media-pagination">
        {!! $customers->render() !!}
    </div>



@endsection

