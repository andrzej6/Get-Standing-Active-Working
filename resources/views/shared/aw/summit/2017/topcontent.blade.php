{{-- */
$title=urlencode("Active Working Summit 2017");
$url=urlencode("http://activeworking.com/summit");
$summary=urlencode("Active Working Summit 2017");
$image=urlencode("http://getbritainstanding.org/img/toplogo.jpg");
$tw_share = urlencode ("Active Working Summit 2017");
$linked_sum = urlencode ("Active Working Summit 2017");
/* --}}


<div class="center-sidemenu">
    <!--
   <div class="aw-slider">
           <div class="aw-slider-header">Availability at 15.12.2014</div>

           <div class="aw-slider-line">
           <form>
             <input type="range" id="percentageslider" class="vslider" min="0" max="100"  value="86"
             style="background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(0.86, rgb(51,102,153)), color-stop(0.86, rgb(136,200,0)));"  >
           </form>
           </div>

           <div class="aw-slider-text">86% booked</div>
      </div>
-->


    <div class="aw-logo">
        <img src="{{ url('/') }}/img/aw/summit/2017/toplogo.jpg" class="aw-logo-small"/>
        <!-- <img src="/images/soldout-small.jpg" class="aw-soldout-small" /> -->
    </div>
    <!-- <div class="center-bottom bookline"><a href="/summit">Book early for AWS 2017 to avoid disappointment</a></div> -->


    <div class="center-bottom">ACTIVE WORKING – How Reducing Sedentary Behaviour at Work<br/> Improves Wellness & Productivity</div>

</div>


<div class="right-sidemenu">
    <div class="aw-details">

        <div class="aw-details-top">
            <strong>Venue:</strong><br/>
            K&L Gates LLP <br/>
            One New Change
            <br/> London, EC4M 9AF<br/>
            United Kingdom<br/><br/>
            <strong>Thurs 30th March 2017</strong><br/>
            08:30am – 18:00pm<br/><br/>
        </div>


        Share this page:
        <div class="aw-share">

            <div class="fb-share-button">
                <a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]={{$title}}&amp;p[summary]={{$summary}}&amp;p[url]={{$url}}&amp;&p[images][0]={{$image}};?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"><img src="{{ url('/') }}/img/general/icons/facebook.png"/></a>
            </div>


            <div class="tw-share-button">
                <a onclick="window.open('http://twitter.com/share?text={{$tw_share}}&amp;url={{$url}}', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"><img src="{{ url('/') }}/img/general/icons/twitter.png" /></a>
            </div>


            <div class="linked-share-button">
                <a onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;title={{$title}}&amp;url={{$url}}&amp;summary={{$linked_sum}}&amp;source=LinkedIn', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"><img src="{{ url('/') }}/img/general/icons/linkedin.jpg" /></a>
            </div>

        </div>

    </div><!--aw-details -->


</div> <!--right-sidemenu -->

<div class="clear"></div>
