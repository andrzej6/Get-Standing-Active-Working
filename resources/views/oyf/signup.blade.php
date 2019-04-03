@extends('layouts.oyf')


@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/oyf/contact.css">
@endsection

@section('description')
    Registration Form
@endsection

@section('keywords')
    on-your-feet, active-working, productive-working, office-productivity, sit-stand,
    sit-stand-desk, standing-desk, height-adjustable-desk, healthy-office
@endsection

@section('title')
    Registration form. On Your Feet World
@endsection


@section('aw-maincontent')

            <h1 class="oyf-newpink">2019 Registration Form</h1>

            <br/>

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


            {!!  Form::open(array('url' => 'oyf_reg','class' => 'register_form')) !!}

            {!!  Form::token() !!}


            <ul>

                <li>
                    <span class="required_notification">* denotes required field </span>
                </li>

                <li>
                    {!!   Form::label('title', '(*)Title:') !!}
                    {!!   Form::select('title',
                                        array('' => 'Select Option',
                                              'Mr.' => 'Mr.',
                                              'Mrs.' => 'Mrs.',
                                              'Miss' => 'Miss',
                                              'Ms.' => 'Ms.'),
                                        array('id' => 'title')) !!}
                    <div style="clear: both;"></div>
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
                    {!!   Form::label('email', '(*)Email address:') !!}
                    {!!   Form::email('email', old('email'), array('id' => 'email')) !!}
                    <span class="form_hint">Proper format: "name@domain.com"</span>
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('workphone', '(*)Work phone number:') !!}
                    {!!   Form::text('workphone', old('workphone'), array('id' => 'workphone')) !!}
                    <span class="form_hint">include AREA CODE please</span>
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('mobilephone', 'Mobile phone number:') !!}
                    {!!   Form::text('mobilephone', old('mobilephone'), array('id' => 'mobilephone')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('ename', '(*)Company Name:') !!}
                    {!!   Form::text('ename', old('ename'), array('id' => 'ename')) !!}
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
                    {!!   Form::label('postcode', '(*)Post code/ Zip code:') !!}
                    {!!   Form::text('postcode', old('postcode'), array('id' => 'postcode')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('city', '(*)City:') !!}
                    {!!   Form::text('city', old('city'), array('id' => 'city')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('county', 'County/State/Province:') !!}
                    {!!   Form::text('county', old('county'), array('id' => 'county')) !!}
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
                                        'NIRL' => 'Northern Ireland',
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
                                        'ZW' => 'Zimbabwe'),
                                       array('id' => 'country')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('jpos', 'Job Position:') !!}
                    {!!   Form::text('jpos', old('jpos'), array('id' => 'jpos')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('dep', 'Department:') !!}
                    {!!   Form::text('dep', old('dep'), array('id' => 'dep')) !!}
                    <span class="form_hint">"e.g. Human Resources, Procurement, Facilities, Health \& Safety or General Management"</span>
                    <div style="clear: both;"></div>
                </li>


                <li>
                    {!!   Form::label('behalf', '(*)This Registration is on behalf of:') !!}
                    {!!   Form::select('behalf',
                                        array('' => 'Select Option',
                                              'practisioner' => 'Practisioner',
                                              'exercise professional' => 'Exercise Professional',
                                              'company 1-10' => 'Company 1-10',
                                              'company 11-25' => 'Company 11-25',
                                              'company 26-99' => 'Company 26-99',
                                              'company 100-499' => 'Company 100-499',
                                              'company 500 and more employees' => 'Company (>500 employees)',
                                              'public sector org' => 'Public Sector Organization',
                                              'private individual' => 'Private Individual'),
                                        array('id' => 'behalf')) !!}
                    <div style="clear: both;"></div>
                </li>

                <br/><hr style="height: 10px;width: 80%;"/><br/>

                <li>
                    {!!   Form::label('event_loc', '(*)Where is your event happening?') !!}
                    {!!   Form::select('event_loc',
                                        array('' => 'Select Option',
                                              'work (one office)' => 'Work (1 Office)',
                                              'work (multiple sites)' => 'Work (Multiple Sites)',
                                              'home' => 'Home'),
                                        array('id' => 'event_loc')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('workplace_size', '(*)Workplace employees participating:') !!}
                    {!!   Form::select('workplace_size',
                                        array('' => 'Select Option',
                                              '.1-24' => '1 - 24',
                                              '25-99' => '25 - 99',
                                              '100-249' => '100 - 249',
                                              '250-499' => '250 - 499',
                                              '500+' => '500+'),
                                        array('id' => 'workplace_size')) !!}
                    <div style="clear: both;"></div>
                </li>

                <li>
                    {!!   Form::label('workplace_extra', 'Number of additional worksites:') !!}
                    {!!   Form::select('workplace_extra',
                                        array('' => 'Select Option',
                                              '.0' => '0',
                                              '1' => '1',
                                              '2' => '2',
                                              '3' => '3',
                                              '4+' => '4+'),
                                        array('id' => 'workplace_extra')) !!}
                    <div style="clear: both;"></div>
                </li>


                <li>
                    {!!   Form::label('workplace_extra_size', 'Additional worksite employees:') !!}
                    {!!   Form::select('workplace_extra_size',
                                        array('' => 'Select Option',
                                              '.1-24' => '1 - 24',
                                              '25-99' => '25 - 99',
                                              '100-249' => '100 - 249',
                                              '250-499' => '250 - 499',
                                              '500+' => '500+'),
                                        array('id' => 'workplace_extra_size')) !!}
                    <div style="clear: both;"></div>
                </li>


                <li>
                    {!!   Form::label('hear_from', 'How did you hear about OYF?') !!}
                    {!!   Form::select('hear_from',
                                        array('' => 'Select Option',
                                              'aw event' => 'Active Working event',
                                              'search' => 'Search Engine',
                                              'other' => 'Other'),
                                        array('id' => 'hear_from')) !!}
                    <div style="clear: both;"></div>
                </li>


                <!--
                BELOW NEED TO ATTACH CORRECT FILE
                <li>
                {{--
                    {!!   Form::label('terms', ' I have read & agree to the Terms & Conditions') !!}
                    {!!  Form::checkbox('terms', 'terms', false,  array('id' => 'terms')) !!}
                    <a href="{{ url('/') }}/pdfs/oyf/can/terms.pdf" class="terms-link" target="_blank"><img src="{{ url('/') }}/img/general/icons/pdficon.png"/></a>
                --}}
                </li>
                -->

                <li>
                    <label></label>
                    <button class="submit oyf-newpink" type="submit" id="yellsub">Submit</button>
                </li>


                <li>

                    <div style="clear: both;"></div>
                    <br/><br/>

                    <div id="additional-oyf">

                        Active Working CIC (AW) would like to keep you up to date with news about
                        our work and ways in which you can get involved.


                        <br/><br/>
                        {!!  Form::checkbox('extras[0]', 'email') !!}
                        Yes please, I would like to hear from AW by email.

                        <br/><br/>

                        Some sit-stand and office furniture third party suppliers offer discounted product via this website.
                        If you would like to receive third party supplier correspondence please tick this box.
                        {!!  Form::checkbox('extras[1]', 'third-party-suppliers') !!}

                        <br/><br/>


                        From time to time AW may allow other similar or partner organizations to contact its supporters.
                        If you do not wish to hear from them, tick here.
                        {!!  Form::checkbox('extras[2]', 'no-for-partners') !!}

                    </div>

                </li>

            </ul>

            {!!  Form::close() !!}



@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#title").attr("required", "true");
            $("#fname").attr("required", "true");
            $("#lname").attr("required", "true");
            $("#email").attr("required", "true");
            $("#workphone").attr("required", "true");
            $("#ename").attr("required", "true");
            $("#address1").attr("required", "true");
            $("#postcode").attr("required", "true");
            $("#city").attr("required", "true");
            $("#country").attr("required", "true");
            $("#behalf").attr("required", "true");

            $("#workplace_size").attr("required", "true");
            $("#event_loc").attr("required", "true");
            //$("#terms").attr("required", "true");
        });
    </script>
@endsection
