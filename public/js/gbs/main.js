jQuery(document).ready(function($) {    $("#gbs-slideshow > div:gt(0)").hide();    setInterval(function() {        $('#gbs-slideshow > div:first')            .fadeOut(2000)            .next()            .fadeIn(2000)            .end()            .appendTo('#gbs-slideshow');    },  7000);    //ALL GO TO CLASSES    $(".go-to-nudge").click(function(event){        window.open('http://activeworking.com/littlenudge','_blank');    });    $(".go-to-onyourfeet").click(function(event){        window.open('http://onyourfeetday.com/britain','_blank');    });    $(".go-to-videos").click(function(event){        window.open('http://activeworking.com/summit/2016/videos','_blank');    });    $(".go-to-summit").click(function(event){        window.open('http://activeworking.com/summit/2017/book','_blank');    });    $(".go-to-statement").click(function(event){        window.location = "./expert_statement.php";    });    $(".go-to-ukactive").click(function(event){        window.open('http://www.ukactive.com/policy-insight/blueprint-for-an-active-britain','_blank');    });    /* solutions page */    $(".go-to-corporate").click(function(event){        window.open('https://sit-stand.com/corporate-sales','_blank');    });    $(".go-to-oyo").click(function(event){        window.open('https://sit-stand.com/motion-seats/153-oyo.html','_blank');    });    $(".go-to-yoyo").click(function(event){        window.open('https://sit-stand.com/desk-risers/123-yo-yo-desk-90.html','_blank');    });    $(".go-to-bwha").click(function(event){        window.open('http://bhwa.org.uk/','_blank');    });    $(".go-to-updown").click(function(event){        window.open('https://sit-stand.com/97-updown','_blank');    });    $(".go-to-workfit").click(function(event){        window.open('https://sit-stand.com/desk-risers/50-workfit-t.html','_blank');    });    $(".go-to-gymflex").click(function(event){        window.open('https://www.gymflex.co.uk/','_blank');    });    $(".go-to-trial").click(function(event){        window.open('https://sit-stand.com/freetrial','_blank');    });    $(".go-to-imprint").click(function(event){        window.open('https://sit-stand.com/comfort-mats/25-comfort-mat.html','_blank');    });    $(".go-to-blackfriday").click(function(event){        window.open('https://sit-stand.com/blackfriday','_blank');    });});