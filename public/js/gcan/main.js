jQuery(document).ready(function($) {    $("#gbs-slideshow > div:gt(0)").hide();    setInterval(function() {        $('#gbs-slideshow > div:first')            .fadeOut(2000)            .next()            .fadeIn(2000)            .end()            .appendTo('#gbs-slideshow');    },  7000);    //ALL GO TO CLASSES    $(".go-to-network").click(function(event){        window.open('http://activeworking.com/contact-us.php','_blank');    });    $(".go-to-oyf").click(function(event){        window.open('http://onyourfeetday.com/canada','_blank');    });});