$( document ).ready(function() {

    //calculator colours
    var lightblue = '#4cbad9';
    var darkblue = '#204aa0';
    //start again button slider color setup
    var lightgreen = '#000000';

    inputs =['eat','comutt','work','relax'];

    //generating input fields
    for( var i = 0; i <= 8; i += 0.25 )
    {
        //we have to change numbers to string to join them
        //j is rounded i value
        j=parseInt(i);
        jstring=j.toString();
        istring =i.toString();
        //below is the ending of number
        lasttwo = istring.slice(-2);

        //text to be inserted in input field
        if (i<1) ending = 'mins';
        else if ((i>=1)&&(i<2)) ending ='hour';
        else if (i>2) ending ='hours';

        //conversion number to parts of an hour
        if (lasttwo=="25") beforeend = '15';
        else if(lasttwo==".5") beforeend = '30';
        else if(lasttwo=="75") beforeend = '45';
        else beforeend = '00';

        //build string
        h = jstring+':'+beforeend+' '+ending;

        for (x in inputs)
        {
            $('#'+inputs[x]+'input').append(
                '<option value="'+i+'">'+h+'</option>'
            );
        }
    }

    // merging sliders changes with input
    inputs.forEach(function(entry) {

        $('#'+entry+'slider').on('change', function()
        {
            $('#'+entry+'input').val($('#'+entry+'slider').val());

            // applying color changes
            value = this.value/8;

            this.style.backgroundImage = [
                '-webkit-gradient(',
                'linear, ',
                'left top, ',
                'right top, ',
                'color-stop(' + value + ', ' + lightblue +'), ',
                'color-stop(' + value + ', ' + darkblue +')',
                ')'
            ].join('');

            $( "#resultcalc" ).fadeOut(2000);
        });

    });

    // merging input changes with slider
    inputs.forEach(function(entry) {
        $('#'+entry+'input').on('change', function(){

            $('#'+entry+'slider').val($('#'+entry+'input').val());
            value = $('#'+entry+'slider').val()/8;

            $('#'+entry+'slider').css({'background-image':

            '-webkit-gradient(linear, 0% 0%, 100% 0%, color-stop('+value+', ' + lightblue +'),  color-stop('+value+', ' + darkblue +'))' });
            $( "#resultcalc" ).fadeOut(2000);

        });


    });


    //button calculate onclick
    $("#calculate").click(function(event){

        event.preventDefault();
        sithours = parseFloat($('#eatinput').val())+parseFloat($('#comuttinput').val())+parseFloat($('#workinput').val())+parseFloat($('#relaxinput').val());

        _gaq.push(['_trackEvent', 'Calculator', 'Calculate', 'calculate hours of sitting daily']);

        switch (true) {
            case (sithours <4):
                color= '#92AD49';
                text=' LOW';
                break;

            case ((sithours >= 4)&& (sithours <6)):
                color='#FFCB00';
                text=' LOW MEDIUM';
                break;

            case ((sithours >= 6)&& (sithours <8)):
                color='#CB9800';
                text=' HIGH MEDIUM';
                break;

            case ((sithours >= 8)&& (sithours <11)):
                color='#EA1E30';
                text=' HIGH';
                break;

            case ((sithours >= 11)&& (sithours <=24)):
                color='#980000';
                text=' VERY HIGH';
                break;

            case (sithours >24):
                text='You have indicated total siting hours longer than a 24-hours day! Please correct your select';
                break;
        }

        if (sithours>24)
            alert(text);
        else
        {

            //Processing the sum from numbers to hours
            roundhours=parseInt(sithours);
            jstring=roundhours.toString();
            sithoursstring =sithours.toString();
            lasttwost = sithoursstring.slice(-2);

            if (lasttwost=="25") beforeendst = '15';
            else if(lasttwost==".5") beforeendst = '30';
            else if(lasttwost=="75") beforeendst = '45';
            else beforeendst = '00';

            h = ' '+roundhours+ ' Hours';
            if (beforeendst!='00') h= h+' and '+ beforeendst+' Mins';

            $( "#resultcalc" ).html('<div class="colfirst"><h5>Your sitting time: </h5> </div><div class="colbox">'+h+'</div><div style="clear: both;"></div>'+
                '<div class="colfirst"><h5>Your risk level:  </h5></div> <div class="colbox">'+text);
            $( "#resultcalc" ).css({'width':'98%','margin-top':'1%'});


            $( ".colbox").css({'background-color':color,
                'float':'right',
                'color':'white',
                'padding':'10px',
                'width':'50%',
                'margin-top':'-10px',
                'text-align':'right'});

            $( ".colfirst").css({'float':'left'});
            $( "#resultcalc" ).slideDown( "slow" );

        }

    });


    //button clear onclick
    $("#clearselection").click(function(event){
        event.preventDefault();

        inputs.forEach(function(entry) {
            '#'+entry+'input'
            '#'+entry+'slider'

            $('#'+entry+'input').val(0);
            $('#'+entry+'slider').val(0);
            $('#'+entry+'slider').css({'background-image':
            '-webkit-gradient(linear, 0% 0%, 100% 0%, color-stop('+0+', red), color-stop('+0+',' +lightgreen+'))'     });
        });

        $( "#resultcalc" ).fadeOut(2000);

    });

});