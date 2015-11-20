<?php include 'header.php'; ?>
<div id="map">
	<div id="gmap"></div>
</div>
<nav class="tabs" data-target=".map-nav__ul">
	<ul>
		<li><a class="active" href="#">Event</a></li>
		<li><a href="#">Performers</a></li>
		<li><a href="#">Venues</a></li>
	</ul>
</nav>
<div class="container container--after_map">
	<nav id="map-nav">
		<?php for ($i=0; $i < 3; $i++) { ?>
		<ul class="map-nav__ul">
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="number">4</div>
					<div class="text">For Kids</div>
				</a>
			</li>
		</ul>
		<?php } ?>
	</nav>
</div>

<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
<script type="text/javascript">
	var map = L.map('gmap').setView([51.505, -0.09], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(map);

	var LeafIcon = L.Icon.extend({
	    options: {
	        iconSize:     [25, 35],
	        shadowSize:   [0, 0],
	        iconAnchor:   [22, 94],
	        shadowAnchor: [4, 62], 
	        popupAnchor:  [-3, -76]
	    }
	}); 

	var blueIcon = L.icon({ iconUrl: 'img/blue-map-icon.png' });


	<?php for ($i=0; $i < 3; $i++) { ?>
		L.marker([51.5, -0.09], {icon: blueIcon}).addTo(map).bindPopup('<div class="map_marker"><div class="time"><img src="img/map_icon_clock.png" /><span>7:30</span></div><div class="text"><h3>Sea Creature Procession</h3><h4>4561 Beach Drive - RM 20</h4></div></div>').openPopup();
	<?php } ?>

</script>

<?php include 'footer.php'; ?>