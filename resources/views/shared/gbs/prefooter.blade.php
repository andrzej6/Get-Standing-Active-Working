<div class="pre_footer">

    <div class="container">

        <aside id="footer_bar" class="row">

            <div class="span3">

                <div class="sidepanel widget_about">

                    <h4 class="sidebar_header">About Us</h4>

                    <img src="img/getstanding/gb/logos/prefooter.png" width="88" height="88" class="alignleft" alt="about us"/>

                    <div id="textprefooter">

                        Get Britain Standing is a dynamic campaign to increase awareness and education of the dangers of
                        sedentary working and prolonged sitting time. Regular minor movement whilst at work is essential for us to:

                        <ul>
                            <li>keep our bodies healthy</li>
                            <li>prevent illness & relieve stress</li>
                            <li>liberate us & make us more productive</li>

                        </ul>

                        Active Working and sit-stand workstations deliver a compelling solution,
                        enabling us to mix up sitting with intermittent periods of standing.

                    </div>
                    <br/>

                </div>

            </div>



            <div class="span3">

                <div class="sidepanel widget_posts">

                    <h4 class="sidebar_header">Featured Media</h4>

                    <ul class="recent_posts">

                        @foreach ($featured_art as $article)

                            <li> <a href="media">
                                    <div class="img_wrapper">
                                        <img src="img/general/media/{{$article->logo}}" width="88" height="88" class="alignleft" alt="featured media"/>
                                    </div>

                                    <div class="recent_posts_content">
                                        <i>{{date_format(new DateTime($article->date_posted), 'jS M Y')}}</i><br/>
                                        {{$article->title}}<br/>
                                        Read more ...
                                    </div>
                                </a>
                            </li>

                        @endforeach

                    </ul>

                </div><!-- .sidepanel -->

            </div>



            <div class="span3">

                <div class="sidepanel widget_recent_entries">

                    <h4 class="sidebar_header">Photo Album</h4>

                    <div class="widget_flickr">
                        <script src="https://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=122725631@N02"></script>
                    </div>

                </div><!-- .widget_recent_entries -->

            </div>



            <div class="span3">

                <div class="sidepanel widget_twitter">

                    <h4 class="sidebar_header">Latest Tweets</h4>

                    <a class="twitter-timeline"   href="https://twitter.com/getGBstanding"  data-widget-id="453927212819832832">Tweets by @getGBstanding</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                    <a href="https://twitter.com/getGBstanding" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @getGBstanding</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                </div><!-- .widget_twitter -->

            </div>

        </aside>

    </div>

</div>
