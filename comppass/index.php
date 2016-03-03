  </head>
  <body>
  <!DOCTYPE html>
  <html lang="en">
  <head>
	  <title>CompPass</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
  <style>
	  html, body {
		  height: 100%;
		  margin: 0;
		  padding: 0;
	  }
	  #map {
		  height: 100%;
	  }

	  .navbar {
		  margin-bottom: 0px;
	  }
  </style>
  <script>

	  // This example adds a red rectangle to a map.

	  function initMap() {
		  var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 17,
			  center: {lat: 50.6714, lng: -120.3627},
			  mapTypeId: google.maps.MapTypeId.TERRAIN
		  });

		  var rectangle1 = new google.maps.Rectangle({
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35,
			  map: map,
			  bounds: {
				  north: 50.67065191,
				  south: 50.67027317,
				  east: -120.3619401,
				  west: -120.3627411
			  }
		  });

		  var myLatLng1 = {lat: 50.67046254, lng: -120.3623406};
		  var image1 = 'images/coin.png';
		  var marker1 = new google.maps.Marker({
			  position: myLatLng1,
			  map: map,
			  icon: image1,
			  title: 'Gold Treasure'
		  });

		  var rectangle2 = new google.maps.Rectangle({
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35,
			  map: map,
			  bounds: {
				  north: 50.671030457,
				  south: 50.67073464,
				  east: -120.3619008,
				  west: -120.3624775
			  }
		  });

		  var myLatLng2 = {lat: 50.67088255, lng: -120.3621892};
		  var image2 = 'images/silver.png';
		  var marker2 = new google.maps.Marker({
			  position: myLatLng2,
			  map: map,
			  icon: image2,
			  title: 'Silver treasure'
		  });

		  var rectangle3 = new google.maps.Rectangle({
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35,
			  map: map,
			  bounds: {
				  north: 50.67139494,
				  south: 50.67119602,
				  east: -120.3635092,
				  west: -120.3639228
			  }
		  });

		  var myLatLng3 = {lat: 50.67129548, lng: -120.363716};
		  var image3 = 'images/canadacoins.png';
		  var marker3 = new google.maps.Marker({
			  position: myLatLng3,
			  map: map,
			  icon: image3,
			  title: 'Coin treasure'
		  });

	  }

  </script>

  <?php include("./nav.php"); ?>
    <div id="map"></div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfjHnsHJQlHIkE6OW-XO9jr9ebo2tETbs&signed_in=true&callback=initMap"></script>
  </body>
</html>