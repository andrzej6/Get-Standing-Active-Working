function initialize() {
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
        center: new google.maps.LatLng(51.505353, -0.081337),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var markerOptions = {
        position: new google.maps.LatLng(51.505353, -0.081337),
        title: 'Ernst & Young LLP, 1 More London Pl, London SE1 2AF, United Kingdom',
        map:map
    }

    var infOptions = {

        content: 'Ernst & Young LLP, 1 More London Pl, London SE1 2AF, United Kingdom',
        position: new google.maps.LatLng(51.505353, -0.081337)
    }


    var marker = new google.maps.Marker(markerOptions);
    var infow = new google.maps.InfoWindow(infOptions);



    google.maps.event.addListener(marker, 'click', function() {
        infow.open(map,marker);
    });

    infow.open(map,marker);

}