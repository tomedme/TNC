<?php

require_once 'gpano.class.php';
require_once 'data.php';

$id = 'tnc_view';

?><!DOCTYPE html>
<html>
<head>
	<title>Explore The NetCircle's office</title>
	<meta charset="utf-8">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCu1gy9E7ZrfZRZkvjPKI0KVRQG2dYCmqQ"></script>
	<style type="text/css">
	#<?php echo $id; ?> { border: 1px solid #333; height: 600px; margin: 20px auto; width: 1000px; }
	</style>
	<script>
	function init() {
		var panoOptions = {
			pano: 'p0',
			visible: true,
			panoProvider: getTncPanorama, 
			pov: { heading: 255, pitch: 10, zoom : 1 }
		};
		
		var panorama = new google.maps.StreetViewPanorama(
			document.getElementById('<?php echo $id; ?>'), panoOptions);
	}
	
	function getTncPanorama(pano, zoom, tileX, tileY) {
		return panos[pano];
	}
	
	function getTncPanoramaTileUrl(pano, zoom, tileX, tileY) {
		// console.log( '/img/' + pano +'/'+ zoom +'-'+ tileX +'-'+ tileY +'.jpg' );
		// return '/img/'+ pano +'/photo.jpg';
		return '/img/'+ pano +'/'+ zoom +'-'+ tileX +'-'+ tileY +'.jpg';
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
	try {
		google.maps.event.addDomListener(window, 'load', init);
	} catch(e) {
		alert('Something went wrong, try refreshing the page...');
	}
	</script>
</head>
<body>
	<div id="<?php echo $id; ?>"></div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2723570-1']);
  _gaq.push(['_setDomainName', 'tnc.binlid.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
