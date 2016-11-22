@extends('layouts.registrations')

@section('inlinestyle')
    <link rel="stylesheet" type="text/css" href="css/regs.css">
@endsection

@section('description')
    Registrations
@endsection

@section('title')
    GBS Registrations
@endsection

@section('pagetitle')
    Get Britain Standing Registrations
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
            <th>job position</th>
            <th>department</th>
            <th>on behalf</th>
            <th>question</th>
            <th>additional</th>
            <th>vouchers/ free trial</th>
            <th>date</th>
        </tr>
        </thead>


    @foreach ($customers as $customer)


        <tr>
            <td>{{$customer->title}}</td>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->workphone}}</td>
            <td>{{$customer->mobilephone}}</td>

            @if (!empty($customer->employername))
               <td>{{$customer->employername}}</td>
            @else
                <td>{{$customer->company_name}}</td>
            @endif

            <td>{{$customer->address_line1}}</td>
            <td>{{$customer->address_line2}}</td>
            <td>{{$customer->postcode}}</td>
            <td>{{$customer->jobposition}}</td>
            <td>{{$customer->department}}</td>
            <td>{{$customer->behalf}}</td>
            <td class="question smallfont">{{$customer->question}}</td>
            <td >{{$customer->additional}}</td>
            <td>{{$customer->vouchers}}</td>
            <td><?php  print date("Y-m-d", strtotime($customer->date_created)); ?></td>
        </tr>

    @endforeach


    </table>


    <div id="media-pagination">
        {!! $customers->render() !!}
    </div>



@endsection

