@extends('layouts.aw.basic')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/shared/nudge.css">
@endsection

@section('description')
    Order Little Nudge
@endsection

@section('keywords')
    active-working, productive-working, office-productivity, sit-stand, standing-desk, stand-up desk, sit-n-stand,
    wellness, office-wellness, employee-wellness, sedentary-office, wellbeing, physical-activity, employee-engagement,
    staff-resilience, stress-management, productivity, occupational-health, height-adjustable-desk, healthy-office, health-and-safety,
    office-wellbeing, well-being
@endsection

@section('title')
    Order Little Nudge
@endsection


@section('content')

    @include('shared.trail')
    <br/>

    <div id="nudge-container">
        <div id="nudge-left">
            <div class="nudge-follow">
                <a href="http://activeworking.com/" target="_blank">
                    <img src="{{ url('/') }}/img/general/nudge/trial/aw-logo.jpg" >
                </a>
            </div>
        </div>



        <div id="nudge_center">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        <li>
                            <strong>Correct following errors: </strong>
                        </li>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('status'))
                <div class="alert alert-{{Session::get('level')}}">
                    <strong>{{Session::get('status')}}</strong>
                </div>
            @endif



            <h1 class="orange">Order Little Nudge</h1>

            <div class="nudge-price">How we price Little Nudge.</div>

            <div id="nudge-table">
                <br/>
                <table style="width:100%" class="nudge-table2">
                    <tr>
                        <th class="col1">Company <br/> Licenses</th>
                        <th class="col2" colspan="4">Annual Price per User<br/>(exVAT)</th>
                        <th class="col3">Discount</th>
                    </tr>

                    <tr>
                        <td class="col1">1 - 4 users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">34.95</td><td class="col2d"></td>
                        <td class="col3">&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="col1">5 - 99 users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">29.95</td><td class="col2d"></td>
                        <td class="col3">14%</td>
                    </tr>

                    <tr>
                        <td class="col1">100 - 249 users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">19.95</td><td class="col2d"></td>

                        <td class="col3">42%</td>
                    </tr>

                    <tr>
                        <td class="col1">250 - 499 users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">14.95</td><td class="col2d"></td>

                        <td class="col3">57%</td>
                    </tr>

                    <tr>
                        <td class="col1">500 - 999 users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">9.95</td><td class="col2d"></td>

                        <td class="col3">71%</td>
                    </tr>

                    <tr>
                        <td class="col1">1,000 + users</td>
                        <td class="col2a"></td><td class="col2b">£</td><td class="col2c">4.95</td><td class="col2d"></td>
                        <td class="col3">85%</td>
                    </tr>

                </table>
            </div>



            {!!  Form::open(array('url' => 'nudge_reg','class' => 'register_form')) !!}

            {!!  Form::token() !!}

            <div id="nudge-calc">
                <br/>
                <div>
                    <div class="nudge-calc-text bigger">Number of Licences required: </div>



                    <div class="nudge-calc-field">
                        <input type="number" name="licnum" min="1" max="100000" step="1" value="1" id="numblic">
                    </div>

                    {!!   Form::hidden('ordercost', 34.95) !!}

                    <div class="clear"></div>

                    <div class="nudge-calc-text">
                        HOW LONG WOULD YOU LIKE THE LICENSE FOR?
                    </div>


                    <div class="nudge-calc-field">
                        {!!  Form::radio('years', 1, true) !!} 1 Year
                        {!!  Form::radio('years', 2) !!} 2 Years
                        {!!  Form::radio('years', 3) !!} 3 Years
                    </div>

                    <div class="clear"></div>
                    <br/>

                    <div id="nudge-cost">Total cost: £<span id="nudge-res">34.95</span> (exc. VAT)</div>


                </div>



                <ul>

                    <li>
                        <br/>
                        <span class="required_notification orange">* denotes required field </span>
                    </li>

                    <li>
                        {!!   Form::label('fname', '(*)First Name:') !!}
                        {!!   Form::text('fname', old('fname'), array('id' => 'fname')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('lname', '(*)Last Name:') !!}
                        {!!   Form::text('lname', old('lname'), array('id' => 'lname')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('jpos', 'Job Position:') !!}
                        {!!   Form::text('jpos', old('jpos'), array('id' => 'jpos')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('email', '(*)Email address:') !!}
                        {!!   Form::email('email', old('email'), array('id' => 'email')) !!}
                        <div style="clear: both;"></div>

                    </li>

                    <li>
                        {!!   Form::label('workphone', '(*)Work phone number:') !!}
                        {!!   Form::text('workphone', old('workphone'), array('id' => 'workphone')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('address1', '(*)Company address line1:') !!}
                        {!!   Form::text('address1', old('address1'), array('id' => 'address1')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('address2', 'Address line2:') !!}
                        {!!   Form::text('address2', old('address2'), array('id' => 'address2')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('postcode', '(*)Zip code:') !!}
                        {!!   Form::text('postcode', old('postcode'), array('id' => 'postcode')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        {!!   Form::label('city', '(*)City:') !!}
                        {!!   Form::text('city', old('city'), array('id' => 'city')) !!}
                        <div style="clear: both;"></div>
                    </li>


                    <li>
                        {!!   Form::label('country', '(*)Country:') !!}
                        {!!   Form::select('country',
                                           array('' => 'Select Option',
                                            'AF' => 'Afghanistan',
                                            'AL' => 'Albania',
                                            'DZ' => 'Algeria',
                                            'AS' => 'American Samoa',
                                            'AD' => 'Andorra',
                                            'AO' => 'Angola',
                                            'AI' => 'Anguilla',
                                            'AQ' => 'Antarctica',
                                            'AG' => 'Antigua and Barbuda',
                                            'AR' => 'Argentina',
                                            'AM' => 'Armenia',
                                            'AW' => 'Aruba',
                                            'AU' => 'Australia',
                                            'AT' => 'Austria',
                                            'AZ' => 'Azerbaijan',
                                            'BS' => 'Bahamas',
                                            'BH' => 'Bahrain',
                                            'BD' => 'Bangladesh',
                                            'BB' => 'Barbados',
                                            'BY' => 'Belarus',
                                            'BE' => 'Belgium',
                                            'BZ' => 'Belize',
                                            'BJ' => 'Benin',
                                            'BM' => 'Bermuda',
                                            'BT' => 'Bhutan',
                                            'BO' => 'Bolivia',
                                            'BA' => 'Bosnia and Herzegovina',
                                            'BW' => 'Botswana',
                                            'BV' => 'Bouvet Island',
                                            'BR' => 'Brazil',
                                            'BQ' => 'British Antarctic Territory',
                                            'IO' => 'British Indian Ocean Territory',
                                            'VG' => 'British Virgin Islands',
                                            'BN' => 'Brunei',
                                            'BG' => 'Bulgaria',
                                            'BF' => 'Burkina Faso',
                                            'BI' => 'Burundi',
                                            'KH' => 'Cambodia',
                                            'CM' => 'Cameroon',
                                            'CA' => 'Canada',
                                            'CT' => 'Canton and Enderbury Islands',
                                            'CV' => 'Cape Verde',
                                            'KY' => 'Cayman Islands',
                                            'CF' => 'Central African Republic',
                                            'TD' => 'Chad',
                                            'CL' => 'Chile',
                                            'CN' => 'China',
                                            'CX' => 'Christmas Island',
                                            'CC' => 'Cocos [Keeling] Islands',
                                            'CO' => 'Colombia',
                                            'KM' => 'Comoros',
                                            'CG' => 'Congo - Brazzaville',
                                            'CD' => 'Congo - Kinshasa',
                                            'CK' => 'Cook Islands',
                                            'CR' => 'Costa Rica',
                                            'HR' => 'Croatia',
                                            'CU' => 'Cuba',
                                            'CY' => 'Cyprus',
                                            'CZ' => 'Czech Republic',
                                            'CI' => 'Côte d’Ivoire',
                                            'DK' => 'Denmark',
                                            'DJ' => 'Djibouti',
                                            'DM' => 'Dominica',
                                            'DO' => 'Dominican Republic',
                                            'NQ' => 'Dronning Maud Land',
                                            'DD' => 'East Germany',
                                            'EC' => 'Ecuador',
                                            'EG' => 'Egypt',
                                            'SV' => 'El Salvador',
                                            'GQ' => 'Equatorial Guinea',
                                            'ER' => 'Eritrea',
                                            'EE' => 'Estonia',
                                            'ET' => 'Ethiopia',
                                            'FK' => 'Falkland Islands',
                                            'FO' => 'Faroe Islands',
                                            'FJ' => 'Fiji',
                                            'FI' => 'Finland',
                                            'FR' => 'France',
                                            'GF' => 'French Guiana',
                                            'PF' => 'French Polynesia',
                                            'TF' => 'French Southern Territories',
                                            'FQ' => 'French Southern and Antarctic Territories',
                                            'GA' => 'Gabon',
                                            'GM' => 'Gambia',
                                            'GE' => 'Georgia',
                                            'DE' => 'Germany',
                                            'GH' => 'Ghana',
                                            'GI' => 'Gibraltar',
                                            'GR' => 'Greece',
                                            'GL' => 'Greenland',
                                            'GD' => 'Grenada',
                                            'GP' => 'Guadeloupe',
                                            'GU' => 'Guam',
                                            'GT' => 'Guatemala',
                                            'GG' => 'Guernsey',
                                            'GN' => 'Guinea',
                                            'GW' => 'Guinea-Bissau',
                                            'GY' => 'Guyana',
                                            'HT' => 'Haiti',
                                            'HM' => 'Heard Island and McDonald Islands',
                                            'HN' => 'Honduras',
                                            'HK' => 'Hong Kong SAR China',
                                            'HU' => 'Hungary',
                                            'IS' => 'Iceland',
                                            'IN' => 'India',
                                            'ID' => 'Indonesia',
                                            'IR' => 'Iran',
                                            'IQ' => 'Iraq',
                                            'IE' => 'Ireland',
                                            'IM' => 'Isle of Man',
                                            'IL' => 'Israel',
                                            'IT' => 'Italy',
                                            'JM' => 'Jamaica',
                                            'JP' => 'Japan',
                                            'JE' => 'Jersey',
                                            'JT' => 'Johnston Island',
                                            'JO' => 'Jordan',
                                            'KZ' => 'Kazakhstan',
                                            'KE' => 'Kenya',
                                            'KI' => 'Kiribati',
                                            'KW' => 'Kuwait',
                                            'KG' => 'Kyrgyzstan',
                                            'LA' => 'Laos',
                                            'LV' => 'Latvia',
                                            'LB' => 'Lebanon',
                                            'LS' => 'Lesotho',
                                            'LR' => 'Liberia',
                                            'LY' => 'Libya',
                                            'LI' => 'Liechtenstein',
                                            'LT' => 'Lithuania',
                                            'LU' => 'Luxembourg',
                                            'MO' => 'Macau SAR China',
                                            'MK' => 'Macedonia',
                                            'MG' => 'Madagascar',
                                            'MW' => 'Malawi',
                                            'MY' => 'Malaysia',
                                            'MV' => 'Maldives',
                                            'ML' => 'Mali',
                                            'MT' => 'Malta',
                                            'MH' => 'Marshall Islands',
                                            'MQ' => 'Martinique',
                                            'MR' => 'Mauritania',
                                            'MU' => 'Mauritius',
                                            'YT' => 'Mayotte',
                                            'FX' => 'Metropolitan France',
                                            'MX' => 'Mexico',
                                            'FM' => 'Micronesia',
                                            'MI' => 'Midway Islands',
                                            'MD' => 'Moldova',
                                            'MC' => 'Monaco',
                                            'MN' => 'Mongolia',
                                            'ME' => 'Montenegro',
                                            'MS' => 'Montserrat',
                                            'MA' => 'Morocco',
                                            'MZ' => 'Mozambique',
                                            'MM' => 'Myanmar [Burma]',
                                            'NA' => 'Namibia',
                                            'NR' => 'Nauru',
                                            'NP' => 'Nepal',
                                            'NL' => 'Netherlands',
                                            'AN' => 'Netherlands Antilles',
                                            'NT' => 'Neutral Zone',
                                            'NC' => 'New Caledonia',
                                            'NZ' => 'New Zealand',
                                            'NI' => 'Nicaragua',
                                            'NE' => 'Niger',
                                            'NG' => 'Nigeria',
                                            'NU' => 'Niue',
                                            'NF' => 'Norfolk Island',
                                            'KP' => 'North Korea',
                                            'VD' => 'North Vietnam',
                                            'MP' => 'Northern Mariana Islands',
                                            'NO' => 'Norway',
                                            'OM' => 'Oman',
                                            'PC' => 'Pacific Islands Trust Territory',
                                            'PK' => 'Pakistan',
                                            'PW' => 'Palau',
                                            'PS' => 'Palestinian Territories',
                                            'PA' => 'Panama',
                                            'PZ' => 'Panama Canal Zone',
                                            'PG' => 'Papua New Guinea',
                                            'PY' => 'Paraguay',
                                            'YD' => 'People Democratic Republic of Yemen',
                                            'PE' => 'Peru',
                                            'PH' => 'Philippines',
                                            'PN' => 'Pitcairn Islands',
                                            'PL' => 'Poland',
                                            'PT' => 'Portugal',
                                            'PR' => 'Puerto Rico',
                                            'QA' => 'Qatar',
                                            'RO' => 'Romania',
                                            'RU' => 'Russia',
                                            'RW' => 'Rwanda',
                                            'RE' => 'Réunion',
                                            'BL' => 'Saint Barthélemy',
                                            'SH' => 'Saint Helena',
                                            'KN' => 'Saint Kitts and Nevis',
                                            'LC' => 'Saint Lucia',
                                            'MF' => 'Saint Martin',
                                            'PM' => 'Saint Pierre and Miquelon',
                                            'VC' => 'Saint Vincent and the Grenadines',
                                            'WS' => 'Samoa',
                                            'SM' => 'San Marino',
                                            'SA' => 'Saudi Arabia',
                                            'SN' => 'Senegal',
                                            'RS' => 'Serbia',
                                            'CS' => 'Serbia and Montenegro',
                                            'SC' => 'Seychelles',
                                            'SL' => 'Sierra Leone',
                                            'SG' => 'Singapore',
                                            'SK' => 'Slovakia',
                                            'SI' => 'Slovenia',
                                            'SB' => 'Solomon Islands',
                                            'SO' => 'Somalia',
                                            'ZA' => 'South Africa',
                                            'GS' => 'South Georgia and the South Sandwich Islands',
                                            'KR' => 'South Korea',
                                            'ES' => 'Spain',
                                            'LK' => 'Sri Lanka',
                                            'SD' => 'Sudan',
                                            'SR' => 'Suriname',
                                            'SJ' => 'Svalbard and Jan Mayen',
                                            'SZ' => 'Swaziland',
                                            'SE' => 'Sweden',
                                            'CH' => 'Switzerland',
                                            'SY' => 'Syria',
                                            'ST' => 'São Tomé and Príncipe',
                                            'TW' => 'Taiwan',
                                            'TJ' => 'Tajikistan',
                                            'TZ' => 'Tanzania',
                                            'TH' => 'Thailand',
                                            'TL' => 'Timor-Leste',
                                            'TG' => 'Togo',
                                            'TK' => 'Tokelau',
                                            'TO' => 'Tonga',
                                            'TT' => 'Trinidad and Tobago',
                                            'TN' => 'Tunisia',
                                            'TR' => 'Turkey',
                                            'TM' => 'Turkmenistan',
                                            'TC' => 'Turks and Caicos Islands',
                                            'TV' => 'Tuvalu',
                                            'UM' => 'U.S. Minor Outlying Islands',
                                            'PU' => 'U.S. Miscellaneous Pacific Islands',
                                            'VI' => 'U.S. Virgin Islands',
                                            'UG' => 'Uganda',
                                            'UA' => 'Ukraine',
                                            'SU' => 'Union of Soviet Socialist Republics',
                                            'AE' => 'United Arab Emirates',
                                            'GB' => 'United Kingdom',
                                            'US' => 'United States',
                                            'ZZ' => 'Unknown or Invalid Region',
                                            'UY' => 'Uruguay',
                                            'UZ' => 'Uzbekistan',
                                            'VU' => 'Vanuatu',
                                            'VA' => 'Vatican City',
                                            'VE' => 'Venezuela',
                                            'VN' => 'Vietnam',
                                            'WK' => 'Wake Island',
                                            'WF' => 'Wallis and Futuna',
                                            'EH' => 'Western Sahara',
                                            'YE' => 'Yemen',
                                            'ZM' => 'Zambia',
                                            'ZW' => 'Zimbabwe',
                                            'AX' => 'Åland Islands'),
                                           array('id' => 'country')) !!}
                        <div style="clear: both;"></div>
                    </li>

                    <li>
                        <br/>
                        <button class="submit" type="submit" id="yellsub">Submit</button>
                    </li>
                </ul>



            </div>

            {!!  Form::close() !!}
        </div>


        <div id="nudge-right">

            <div class="nudge-follow">
                <div style="text-align: center">
                    <a href="http://www.littlenudge.com/" target="_blank">
                        <img src="{{ url('/') }}/img/general/nudge/trial/nudge.jpg" >
                    </a>


                    <br/>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/littlenudge" class="nudge-button1" target="_blank">Introduction</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_trial" class="nudge-button1" target="_blank">Free Trial</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_order" class="nudge-button1" target="_blank">Order</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/nudge_faq" class="nudge-button1" target="_blank">FAQ page</a>
                    </div>

                    <div style="margin-bottom:20px">
                        <a href="{{ url('/') }}/img/general/nudge/instructions.pdf" class="nudge-button1" target="_blank">Installation Guide</a>
                    </div>



                </div>



            </div>

        </div>

    </div>



@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript" src="{{ url('/') }}/js/aw/nudge-order.js"></script>
    <script type="text/javascript">

        $( document ).ready(function() {
            $("#fname").attr("required", "true");
            $("#lname").attr("required", "true");
            $("#email").attr("required", "true");
            $("#workphone").attr("required", "true");
            $("#address1").attr("required", "true");
            $("#postcode").attr("required", "true");
            $("#city").attr("required", "true");
            $("#country").attr("required", "true");
        });

        $(window).bind('scroll', function() {
            if($(window).scrollTop()+215 >= $('.pre_footer').offset().top + $('.pre_footer').outerHeight() - window.innerHeight) {
                $('.nudge-follow').css( "display","none");
            }
            else {
                $('.nudge-follow').css( "display","block");
            }
        });
    </script>
@endsection

