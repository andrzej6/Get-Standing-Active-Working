@extends('layouts.aw.summit-2017')

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
                    <a href="mailto:info@activeworking.com?Subject=Invoice">info@activeworking.com</a>.
                </li>
                <li>PayPal: see below.</li>
            </ol>

        </div>


        <div class="aw-payment-button">

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="4VX6ZCV8L9L8S">
                <table>
                    <tr><td><input type="hidden" name="on0" value="Choose correct option">Your Option</td></tr><tr><td>

                            <select name="os0">

                                @if ($supplier =='NO')
                                   <option value="Standard-20% Discount">Early Bird 20% Discount - FULL DAY - £268 GBP</option>
                                @elseif ($supplier =='YES')
                                   <option value="Suppliers-20% Discount">Early Bird 20% Discount - FULL DAY - £636 GBP</option>
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