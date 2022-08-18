<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<title><?= $site->seo_title() ?></title>
	<meta name="description" content="<?= $site->seo_description() ?>">
	<script type="module">
		document.documentElement.classList.remove('no-js');
		document.documentElement.classList.add('js');
	</script>
	<?= css('assets/css/app.css') ?>
	<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet" />
</head>

<body class="bg-gray-200 text-base antialiased">

<main class="block">
<div id="map" class="w-screen h-screen"></div>
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
