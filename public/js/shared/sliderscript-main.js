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