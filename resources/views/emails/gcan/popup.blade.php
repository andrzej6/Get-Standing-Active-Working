<html>
<body>

<div style="color:black;">

        <a href="#" style="color:#009999;">
            <img src="{{ url('/') }}/img/general/emails/gcan.png" width="100"/></a>

        &nbsp;&nbsp;&nbsp;

        <a href="#" style="color:#009999;">
            <img src="{{ url('/') }}/img/general/emails/activeworking.jpg" width="100"/></a>
        <br/><br/>
        Thank you for signing up for our e-newsletter.<br/><br/>


        <strong>Please confirm your email</strong> by
        <a href="http://getcanadastanding.org/popup_confirm?email=<?php echo $email ?>&key=<?php echo $token ?>">clicking here</a>.
        <br/><br/>

        @include('shared.gcan.email_supporters')

</div>

</body>

</html>