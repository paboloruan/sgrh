@extends('layouts.app')

@section('content')

<input type="hidden" id="div" value="{{$mapa}}">

<div id="map"></div>

@endsection
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('googlemaps.key') }}">
</script>
<script>

    function initMap() {

        var direcoes = JSON.parse(JSON.stringify(JSON.parse($("#div").val())));
        console.log(direcoes);
        //direcoes.replace(/&quot;/g, '"');

        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var mapOptions = {
          zoom:7
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        directionsDisplay.setMap(map);

        directionsService.route(direcoes, function(result, status) {
            if (status == 'OK') {
                directionsDisplay.setDirections(result);
            }
        });
      }

      google.maps.event.addDomListener(window, 'load', initMap);
</script>