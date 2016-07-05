@extends('layouts.gbs.index')

@section('content')
        <!-- C O N T E N T -->

<div class="content_wrapper">

    <div class="container">

        <div class="content_block no-sidebar row">

            <div class="fl-container span12">

                <div class="row">

                    <div class="posts-block span12">

                        <div class="contentarea">

                            <div id="homemaincont">
                               <h1> @{{ message  }}</h1>
                                <input v-model="message">
                            </div> <!--homemaincont-->

                        </div><!-- .contentarea -->



                    </div>  <!--post block span12-->



                    <div class="left-sidebar-block span3">

                        <!-- Left Sidebar Text -->

                    </div><!-- .left-sidebar -->





                </div>  <!-- row -->

                <div class="clear"><!-- ClearFix --></div>





            </div><!-- .fl-container -->



            <div class="right-sidebar-block span3">

                <aside class="sidebar">



                </aside>

            </div><!-- .right-sidebar -->







            <div class="clear"><!-- ClearFix --></div>





        </div>  <!-- content-block no-sidebar row -->

    </div><!-- .container -->

</div><!-- .content_wrapper -->

@endsection

@section('footer-scripts')

    <script type="text/javascript">

        $(window).load(function(){

            $('#banner1').oneByOne({

                className: 'oneByOne1',

                easeType: 'random',

                responsive: true,

                enableDrag: false,

                width: 1170,

                height:300,

                minWidth: 300,

                slideShow: true,

                slideShowDelay: 5000

            });

        });

    </script>

    <script>

        new Vue ({
            el:'#homemaincont',
            data: {
                message:'Hello World'
            }

        });
    </script>


@endsection

