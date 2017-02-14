$(window).bind('scroll', function() {
        $('#oyf-follow').css( "position","fixed");
});

$(window).load(function(){

    $('#banner1').oneByOne({
        className: 'oneByOne1',
        easeType: 'random',
        responsive: true,
        enableDrag: false,
        width: 703,
        height:250,
        minWidth: 300,
        slideShow: true,
        slideShowDelay: 5000
    });


    var w = window.innerWidth;
    var w1 = document.getElementById('cont-width').offsetWidth;
    z=(w-w1)/2-5;

    $('#oyf-follow').css( "right",z);

    if (w<1170)  $('#oyf-follow').css( "display","none");

});

$(".go-to-onyourfeet-r").click(function(event){
    window.open('http://onyourfeetday.com/signup','_blank');
});