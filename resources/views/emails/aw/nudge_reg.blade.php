<html>
<style>body {font-family:Arial;font-size:10pt}</style>
<body>
<div style="color:black;">
    <a href="http://activeworking.com">
        <img src="{{ url('/') }}/img/general/emails/activeworking.jpg" width="100"/></a>
    &nbsp;&nbsp;&nbsp;
    <a href="http://activeworking.com/littlenudge.php">
        <img src="{{ url('/') }}/img/general/emails/little_nudge1.jpg" width="100"/></a>

    <br/><br/>

    Dear {{$fname}},<br/>
    We have just received your order for {{$licnum}} license(s) of Little Nudge for period of
    {{$years}} year(s).<br/><br/>
    The next steps are as follows:<br/>
    <ol>
        <li>You will receive an invoice from us (within one work day).</li>
        <li>You can pay this invoice: online, by bank transfer or by cheque.</li>
        <li>On receipt of payment, we will provide you with the necessary installation file(s) and instructions (within 2 work days).</li>
    </ol>
    <br/><br/>
    Healthy thanks from all the team,  <br/><br/>
    <strong> Active Working and Little Nudge</strong><br/>

</div>
</body>


</html>