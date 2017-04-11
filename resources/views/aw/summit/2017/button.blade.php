{{-- */
$sandbox=0;
/* --}}


@extends('layouts.aw.summit-2018')

@section('header-styles')
    @parent
@endsection


@section('description')
    Active Working provide thought leadership to reduce prolonged sitting in the workplace. Working with government,
    medical science, health charities and employers.
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Active Working Summit 2017. Book Now.
@endsection


@section('aw-maincontent')
    <br/>

    <div id="aw-payment">

        <div class="aw-payment-message">
            Thank you for registration. <br/><br/>
            <strong>To complete your booking you must make a payment <span class="aw-underline">now</span> by:</strong>

            <ol>
                <li>Invoice: please send a purchase order including name(s) of attendee(s) to
                    <a href="mailto:events@activeworking.com?Subject=Invoice">events@activeworking.com</a>.
                </li>
                <li>PayPal: see below.</li>
            </ol>
            <br/>
            <span style="color:red">NB Online payment <u>must</u> be made immediately after registration.
                Otherwise it will be necessary to re-register.</span>
            <br/><br/>
        </div>


        <div class="aw-payment-button">

            @if ($sandbox == 1)
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="hosted_button_id" value="HTMQRUKD4MPKW">
            @else
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="hosted_button_id" value="4VX6ZCV8L9L8S">
            @endif



                <input type="hidden" name="cmd" value="_s-xclick">
                <table>
                    <tr><td><input type="hidden" name="on0" value="Choose correct option">Your Option</td></tr><tr><td>

                            <select name="os0">

                                @if ($supplier =='NO')
                                    <option value="Standard-30% Discount">Standard - FULL DAY - 30% Discount - £234.5 GBP</option>

                                <!--



                                    <option value="Standard-15% Discount">Early Bird 15% Discount - FULL DAY - £284.75 GBP</option>
                                    <option value="Standard-20% Discount">Early Bird 20% Discount - FULL DAY - £268.00 GBP</option>
                                 -->

                                @elseif ($supplier =='YES')
                                   <option value="Suppliers-30% Discount">Suppliers - FULL DAY - 30% Discount - £556.5 GBP</option>

                                    <!--
                                     <option value="Suppliers-15% Discount">Early Bird 15% Discount - FULL DAY - £675.75 GBP</option>
                                    -->
                                @endif

                            </select> </td></tr>
                </table>

                <input type="hidden" name="currency_code" value="GBP">

                <input type="hidden" name="custom" value="{{$id}}">
                <input type="hidden" name="email" value="{{$replyto}}">

                <input type="image" src="https://getbritainstanding.org/img/pics/makepayment1.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">

            </form>


        </div>

    </div>


@endsection
