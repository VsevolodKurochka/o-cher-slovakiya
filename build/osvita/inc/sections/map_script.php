
<script>
	// This example displays a marker at the center of Australia.
	// When the user clicks the marker, an info window opens.

	function initMap() {
			var uluru = {lat: 50.434675, lng: 30.514878};
			var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 15,
			center: uluru,
			disableDefaultUI: true,
			scrollwheel: false
		});

		var title = 'г. Киев, ул. Антоновича, 33 В, оф. 11';

		var contentString = '<div class="v-contact__info-window-title">'+ title + '</div>';

		var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
	position: uluru,
	map: map,
	title: title,
	icon: 'img/map-marker.png'
	});

	infowindow.open(map, marker);
	//- marker.addListener('click', function() {

	//- });
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4vqrgTZ81rE5juLYbXT6Tg7y6T8Ii0Nc&amp;language=ru&amp;callback=initMap"></script>