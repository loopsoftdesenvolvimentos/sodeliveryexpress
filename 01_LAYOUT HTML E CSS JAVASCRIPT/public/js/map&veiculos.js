function mapa(){
	let mapa = new google.maps.Map(document.getElementById('mapa'),
		{
			center:new google.maps.LatLng(-14.235,-51.9253),
			zoom:5
		});
  var uluru = {lat: -22.2236, lng: -54.8125};

  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: mapa});
}