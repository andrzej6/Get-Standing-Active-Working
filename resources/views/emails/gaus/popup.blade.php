<html>
<body>

<div style="color:black;">

        <a href="#" style="color:#009999;">
            <img src="{{ url('/') }}/img/general/emails/gaus.png" width="100"/></a>

        &nbsp;&nbsp;&nbsp;

        <a href="#" style="color:#009999;">
            <img src="{{ url('/') }}/img/general/emails/activeworking.jpg" width="100"/></a>
        <br/><br/>
        Thank you for signing up for our e-newsletter.<br/><br/>


        <strong>Please confirm your email</strong> by
        <a href="http://127.0.0.1/laravel/public/popup_confirm?email=<?php echo $email ?>&key=<?php echo $token ?>">clicking here</a>.
        <br/><br/>

        @include('shared.gaus.email_supporters')

</div>

</body>

</html>