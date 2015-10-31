$(document).ready(function() {

	var map = new GMaps ({
		div: '#map',
		lat: 38.2937704,
		lng: -122.2806114,
		zoom: 11
	});

	map.addMarker ({
		lat: 38.3004391,
		lng: -122.2889263,
		title: 'Vinum Auri'
	});

});