$( document ).ready(function() {

    $( "#bio1" ).click(function(e) {
        e.preventDefault();
        $( "#bio1-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio2" ).click(function(e) {
        e.preventDefault();
        $( "#bio2-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio3" ).click(function(e) {
        e.preventDefault();
        $( "#bio3-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio4" ).click(function(e) {
        e.preventDefault();
        $( "#bio4-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio5" ).click(function(e) {
        e.preventDefault();
        $( "#bio5-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio6" ).click(function(e) {
        e.preventDefault();
        $( "#bio6-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio7" ).click(function(e) {
        e.preventDefault();
        $( "#bio7-more" ).slideToggle( "slow" );
        return false;
    });



    $( "#bio8" ).click(function(e) {
        e.preventDefault();
        $( "#bio8-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio9" ).click(function(e) {
        e.preventDefault();
        $( "#bio9-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio10" ).click(function(e) {
        e.preventDefault();
        $( "#bio10-more" ).slideToggle( "slow" );
        return false;
    });



    $( "#bio11" ).click(function(e) {
        e.preventDefault();
        $( "#bio11-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio12" ).click(function(e) {
        e.preventDefault();
        $( "#bio12-more" ).slideToggle( "slow" );
        return false;
    });



    $( "#bio13" ).click(function(e) {
        e.preventDefault();
        $( "#bio13-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio14" ).click(function(e) {
        e.preventDefault();
        $( "#bio14-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio15" ).click(function(e) {
        e.preventDefault();
        $( "#bio15-more" ).slideToggle( "slow" );
        return false;
    });



    $( "#bio16" ).click(function(e) {
        e.preventDefault();
        $( "#bio16-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio17" ).click(function(e) {
        e.preventDefault();
        $( "#bio17-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio18" ).click(function(e) {
        e.preventDefault();
        $( "#bio18-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio19" ).click(function(e) {
        e.preventDefault();
        $( "#bio19-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio20" ).click(function(e) {
        e.preventDefault();
        $( "#bio20-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#bio21" ).click(function(e) {
        e.preventDefault();
        $( "#bio21-more" ).slideToggle( "slow" );
        return false;
    });

    $( "#bio22" ).click(function(e) {
        e.preventDefault();
        $( "#bio22-more" ).slideToggle( "slow" );
        return false;
    });

    $( "#bio23" ).click(function(e) {
        e.preventDefault();
        $( "#bio23-more" ).slideToggle( "slow" );
        return false;
    });

    $( "#bio24" ).click(function(e) {
        e.preventDefault();
        $( "#bio24-more" ).slideToggle( "slow" );
        return false;
    });

    $( "#bio25" ).click(function(e) {
        e.preventDefault();
        $( "#bio25-more" ).slideToggle( "slow" );
        return false;
    });





    $( "#over1" ).click(function(e) {
        e.preventDefault();
        $( "#over1-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#over2" ).click(function(e) {
        e.preventDefault();
        $( "#over2-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#over3" ).click(function(e) {
        e.preventDefault();
        $( "#over3-more" ).slideToggle( "slow" );
        return false;
    });


    $( "#over4" ).click(function(e) {
        e.preventDefault();
        $( "#over4-more" ).slideToggle( "slow" );
        return false;
    });



    $("#aw-menub").click(function(event){
        event.preventDefault();
        $( "#aw-navig" ).slideToggle( "slow" );
        return false;
    });





    $( "#member" ).change(function() {
        if ($("#member").val() !='')
        {
            if ($("#memberfield").prop('required')==false)
            {
                $("#memberfield").prop('required',true);
                $( "#member-li" ).toggle( "slow", function() { });
                $("#supplier2").prop('checked',true);
            }
        }
        else if ($("#member").val() =='')
        {
            if ($("#memberfield").prop('required')==true)
            {
                $("#memberfield").prop('required',false);
                $( "#member-li" ).toggle( "slow", function() { });
            }
        }

    });






});