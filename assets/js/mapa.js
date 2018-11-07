function initialize() {
  var marcadores = [
    ['Mersan Tachira', 7.7619267,-72.291802],
    ['Mersan Tinaquillo', 9.9193893,-68.2903317,17]
  ];
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 6,
    center: new google.maps.LatLng(10.1727434,-68.0642651),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var infowindow = new google.maps.InfoWindow();
  var marker, i;
  for (i = 0; i < marcadores.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
      map: map
    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(marcadores[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }
}
google.maps.event.addDomListener(window, 'load', initialize);