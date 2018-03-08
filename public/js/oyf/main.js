$(window).bind('scroll', function() {
        $('#oyf-follow').css( "position","fixed");
});


$( document ).ready(function() {

    $("#aw-menub").click(function(event){
        event.preventDefault();
        $( "#aw-navig" ).slideToggle( "slow" );
        return false;
    });
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

   // if (w<1170)  $('#oyf-follow').css( "display","none");
    if (w<1000)  $('#oyf-follow').css( "display","none");

});

$(".go-to-onyourfeet-r").click(function(event){
    window.open('http://onyourfeetday.com/signup','_blank');
});

$(".go-to-oyfoffer").click(function(event){
    window.open('https://sit-stand.com/on-your-feet-promotion','_blank');
});


$(".go-to-onyourfeet-download-uk").click(function(event){
    window.open('http://onyourfeetday.com/britain/downloads','_blank');
});

$(".go-to-onyourfeet-download-us").click(function(event){
    window.open('http://onyourfeetday.com/america/downloads','_blank');
});

$(".go-to-onyourfeet-download-can").click(function(event){
    window.open('http://onyourfeetday.com/canada/downloads','_blank');
});

$(".go-to-onyourfeet-download-aus").click(function(event){
    window.open('http://onyourfeetday.com/australia/downloads','_blank');
});

$(".go-to-onyourfeet-download-nirl").click(function(event){
    window.open('http://onyourfeetday.com/northern_ireland/downloads','_blank');
});

$(".go-to-onyourfeet-download-irl").click(function(event){
    window.open('http://onyourfeetday.com/ireland/downloads','_blank');
});

$(".go-to-onyourfeet-download-eu").click(function(event){
    window.open('http://onyourfeetday.com/europe/downloads','_blank');
});













