function initialize() {
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
        center: new google.maps.LatLng(51.513747, -0.095524),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var markerOptions = {
        position: new google.maps.LatLng(51.513747, -0.095524),
        title: 'Ernst & Young LLP, 1 More London Pl, London SE1 2AF, United Kingdom',
        map:map
    }

    var infOptions = {

        content: 'K&L Gates LLP, One New Change, London, EC4M 9AF, United Kingdom',
        position: new google.maps.LatLng(51.513747, -0.095524)
    }


    var marker = new google.maps.Marker(markerOptions);
    var infow = new google.maps.InfoWindow(infOptions);



    google.maps.event.addListener(marker, 'click', function() {
        infow.open(map,marker);
    });

    infow.open(map,marker);

}