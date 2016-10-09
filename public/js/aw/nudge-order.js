jQuery(document).ready(function($) {

    $('#numblic').change(function(e) {
        event.preventDefault();
        calc_price();
        return false;
    });

    $('#numblic').keypress(function (e) {
        if (e.which == 13)
        {
            calc_price();
            return false;    //<---- Add this line
        }
    });


    $('input[type=radio][name=years]').change(function() {
        calc_price();
    });


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


    function calc_price() {
        licnum = parseInt($( "input[name='licnum']" ).val());
        $( "#numblic" ).val(Math.floor(licnum));
        years = parseInt($("input[name=years]:checked").val());

        if ((licnum>0)&&(licnum<100000))
        {
            switch(true)
            {
                case ((licnum > 0) && (licnum <= 4)):
                    y = 34.95;
                    break;

                case ((licnum > 4) && (licnum <= 99)):
                    y = 29.95;
                    break;

                case ((licnum > 99) && (licnum <= 249)):
                    y = 19.95;
                    break;

                case ((licnum > 249) && (licnum <= 499)):
                    y = 14.95;
                    break;

                case ((licnum > 499) && (licnum <= 999)):
                    y = 9.95;

                    break;

                case ((licnum > 999) && (licnum <= 100000)):
                    y = 4.95;
                    break;

            }
            totalcost = (licnum * y)*years;
            //totalnice = Math.round(totalcost);
            totalnice = totalcost.toFixed(2);

            unitprice = totalcost / licnum;

            $("input[name=ordercost]").val(totalnice);
            $( "#nudge-res" ).html(addCommas(totalnice));

            // $("#nudge-res").html('licences by £29.95: '+ x1 +'<br/>'+ 'licences by £19.95: '+ x2 +'<br/>'+ 'licences by £14.95: '+ x3 +'<br/>'+ 'licences by £9.95: '+ x4 +'<br/>'+'licences by £4.95: '+ x5 +'<br/>');
        }
        else {
            alert("Please enter number of licences between 1 and 100,000");
        }

    }

});