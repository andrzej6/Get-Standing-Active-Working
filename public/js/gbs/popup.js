$( document ).ready(function() {

    var dialog, form, emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
    email = $( "#email1" );


    var windowwidth = 300;
    var margintop = 0;
    var titletext = '<img src="http://getbritainstanding.org/lara_base/public/img/getstanding/gb/logos/minilogo.png" /><span class="gbs-popup-title"> &nbsp;Keep connected.</span>';

    if ($(window).width()>550)
    {
        windowwidth = 550;
        margintop = '-113px';
        titletext ='<img src="http://getbritainstanding.org/lara_base/public/img/getstanding/gb/logos/minilogo.png" /><span class="gbs-popup-title"> &nbsp;Keep connected to our campaign. JOIN US</span>';
    }


    //setting up dialog box properties
    dialog = $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },

        hide: {
            effect: "drop",
            duration: 1000
        },

        // position: { my: "left top+110px", at: "left top", of: window },
        position: { my: "center", at: "center", of: window },
        buttons: {"Sign Up":{ 'text':'Sign Up','click':addUser,'class':'blue-butt'} },

        close : function(){
            if (!$.cookie('close-window'))
            {
                $.cookie('close-window', 1, { expires: 90, path: '/'});
            }

            else
            {
                var cl = $.cookie('close-window');
                cl++;
                $.cookie('close-window', cl, { expires: 90, path: '/'});

                //checking if user close the window already 2 times
                if (cl == 2)
                {
                    $.cookie('quick-register', 1, { expires: 90, path: '/'});
                }
            }

        },

        title: 'JOIN US',
        width: windowwidth
    });



    dialog.data( "uiDialog" )._title = function(title) {
        title.html( this.options.title );
    };


    dialog.dialog('option', 'title', titletext);
    $('.ui-dialog-buttonset').css( "margin-top", margintop );


    //bind submit of the form to the function addUser
    form = dialog.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        addUser();
    });


    if (!$.cookie('quick-register'))
    {
        setTimeout(function(){
            $( "#dialog" ).dialog( "open" );
        }, 30000);
    }



    if ($(".ui-widget-overlay")) //the dialog has popped up in modal view
    {
        //fix the overlay so it scrolls down with the page
        $(".ui-widget-overlay").css({
            position: 'fixed',
            top: '0'
        });


        //get the current popup position of the dialog box
        pos = $(".ui-dialog").position();


        //adjust the dialog box so that it scrolls as you scroll the page
        $(".ui-dialog").css({
            position: 'fixed',
            top: pos.y
        });
    }



    if ( $(".fancybox"))
        $(".fancybox").fancybox({ prevEffect: 'none',nextEffect: 'none'});




    //helper function - adding commas to number before display
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }


    //helper function - checking regexp
    function checkRegexp( o, regexp)
    {

        if ( !( regexp.test( o.val() ) ) )
        { return false;}
           else
          { return true; }
    }


    //helper function - checkLength
    function checkLength( o, n, min, max )
    {
        if ( o.val().length > max || o.val().length < min )
        { return false;}
           else
          {return true; }
    }

    //helper function - adding user to db
    function addUser()
    {
        // validating email
        $('#qreg-form')[0].checkValidity();
        var valid = true;
        valid = valid && checkLength( email, "email", 6, 80 );
        valid = valid && checkRegexp( email, emailRegex);

        if ( valid )
          {
            //insert new email to database
            $.post( "/store.php", $( "#qreg-form" ).serialize()).done(function( data )
            {
                if (data=="")
                  {
                    $(".qreg-cont").html('<div class="qreg-m"><br/>Thank you for signing up. <br/>You will receive an email shortly.</div>');
                    $.cookie('quick-register', 1, { expires: 90, path: '/'});
                    $('.blue-butt').remove();
                    $('.ui-dialog').css({ "height": "157px"});
                  }
                else
                  {
                      //$(".qreg-cont").html('<div class="qreg-m"><br/>Sorry, we could not sign you up. <br/>'+data+'</div>');
                      $(".qreg-err").html(data);
                      $("#email1").focus();
                      $("#email1").css({ "border": "1px solid red"});
                  }
            });

          }

        else
          {
            $(".qreg-err").html('Input correct email address, please.');
            $("#email1").focus();
            $("#email1").css({ "border": "1px solid red"});
          }

      }

});