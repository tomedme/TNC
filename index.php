<?php

require_once 'gpano.class.php';
require_once 'data.php';

?><!DOCTYPE html>
<html>
	<head>
		<title>Explore The NetCircle office</title>
		<meta charset="utf-8">
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="tnc.js"></script>
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
		<div id="pano_canvas" style="width: 600px; height: 447px"></div>
	</body>
</html>
