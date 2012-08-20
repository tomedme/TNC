<?php

require_once 'gpano.class.php';
require_once 'data.php';

?><!DOCTYPE html>
<html>
	<head>
		<title>Explore The NetCircle office</title>
		<meta charset="utf-8">
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
		function init() {
			var panoOptions = {
				pano: 'p0',
				visible: true,
				panoProvider: getTncPanorama, 
				pov: { heading: 180, pitch: -10, zoom : 1 }
			};
			
			var panorama = new google.maps.StreetViewPanorama(
				document.getElementById('pano_canvas'), panoOptions);
		}

		function getTncPanorama(pano, zoom, tileX, tileY) {
			return panos[pano];
		}

		function getTncPanoramaTileUrl(pano, zoom, tileX, tileY) {
			// zoom 3, 4, 5
			// console.log( '/img/' + pano +'/'+ zoom +'-'+ tileX +'-'+ tileY +'.jpg' );
			return '/img/'+ pano +'/photo.jpg';
		}
		</script>
		<script>
		var panos = {
		<?php foreach ($panos as $pano) :
			echo $pano;
		endforeach; ?>
		__: null
		}
		</script>
		<script>
			google.maps.event.addDomListener(window, 'load', init);
		</script>
	</head>
	<body>
		<div id="pano_canvas" style="width: 1000px; height: 600px"></div>
	</body>
</html>
