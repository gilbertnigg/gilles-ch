<?php snippet('head') ?>

<body class="bg-gray-200 text-gb-dark text-base antialiased">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet" />

<main class="block">
<div id="map" class="w-screen h-screen bg-gb-dark text-white"></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZ25pZ2ciLCJhIjoiY2wydTM3NGlwMGFkNDNzbzQ2N2doZ3loYyJ9._yiYy6qVqHCBvGtH5ciOTA';
const map = new mapboxgl.Map({
	container: 'map', // container ID
	style: 'mapbox://styles/gnigg/cl2uzf1o1003d15ltnumrgbkz', // style URL
	center: [8.518780, 47.391040], // starting position [lng, lat]
	zoom: 14 // starting zoom
});
map.addControl(new mapboxgl.NavigationControl());
map.addControl(new mapboxgl.FullscreenControl());
map.scrollZoom.disable();
</script>
</main>

</body>

</html>
