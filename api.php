
<?php
include('useraccess.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
		padding:30px;
		box-sizing:border-box;
		
       }
	   
input[type=text]{
width:30%;
height:40px;
}
.search-container button {
  padding: 6px;
  margin-top: 8px;
  margin-right: 6px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
    </style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale-1,maximum-scale-1" />
  <link rel="stylesheet" type="text/css" href="css/portfolio.css">
  <script type="text/javascript" src="js/jQuery-3.2.1.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
	
  </head>
  <body>
  
  <nav class="navbar navbar-light" style="background-color: #ffe6ff">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="userhome.php">ResortBD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="accommodation.php">ACCOMMODATION</a></li>
      <li><a href="reservation.php">RESERVATION</a></li>
	  <li><a href="review_rating.php">REVIEW</a></li>
	    <li><a href="api.php">API</a></li>
		 <li><a href="gallery.php">GALLERY</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  
  
  
    <h3>Google API Demo</h3>
	
	 <div class="search-container">
	<form align="center">
  <input type="text" placeholder="   আপনার জায়গা লিখুন  ....." name="search" id="txtSource">
  </form>
  </div>
    <!--The div element for the map -->
    <div id="map"></div>
	<button class="btn" style="margin-left:50px;margin-top:10px" onclick="show();">দেখুন </button>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvzcq196Jiku09j0TambANWIeA4FJJMo4&libraries=places"></script>
    <script>

		var map;
		
		//function initAutocomplete() {
        //  map = new google.maps.Map(document.getElementById('map'), {
       //   center: {lat: 24.894574, lng: 91.870680},
       //   zoom: 14,
       //   mapTypeId: 'roadmap',
		  
        //});
		
		var mapOptions = {
			center: {lat: 25.169544, lng: 91.886726},
			zoom: 14
		};
		
		var directionsDisplay = new google.maps.DirectionsRenderer();
		var directionsService = new google.maps.DirectionsService();
		
		//var dhaka = new google.maps.LatLng(23.810332, 90.412518);
		var bisnakandi = new google.maps.LatLng(25.169544, 91.886726);
		
		
		
		map = new google.maps.Map(document.getElementById('map'), mapOptions);
		//var marker = new google.maps.Marker({position: sylhet, map: map});
		
		directionsDisplay.setMap(map);
		places = {
			"Dhaka":{
				"Lat": 23.810332,
				"Lang": 90.412518
			},
			"Rajshahi" : {
				"Lat": 24.363589,
				"Lang": 88.624135
			},
			"Rangpur" : {
			"Lat": 25.743892,
			"Lang": 89.275227
			},
			
			"Kushtia" : {
			"Lat": 23.890700,
			"Lang": 89.109937
			},
			"Khulna" : {
			"Lat": 22.845641,
			"Lang": 89.540328
			},

			"Mymensingh" : {
			"Lat": 24.747149,
			"Lang": 90.420273
			},
			"Barisal" : {
			"Lat": 22.701002,
			"Lang": 90.353451
			},
			"Dinajpur" : {
			"Lat": 25.627912,
			"Lang": 88.633176
			},



		};
		function show(){
			var source = document.getElementById("txtSource").value;
			
			var Origin = new google.maps.LatLng(places[source]["Lat"], places[source]["Lang"]);
			var request = {
				origin:Origin,
				destination:bisnakandi,
				travelMode:'DRIVING'
			}
			
			directionsService.route(request, function(result, status){
				if(status=="OK"){
					directionsDisplay.setDirections(result)
				}
			});
		}
	
		
    </script>
	<br>
	<br>
	<a href="direction.php">
  <button style="margin-left:50px">View Direction</button></a>
  </body>
</html>