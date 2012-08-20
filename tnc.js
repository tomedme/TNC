// tnc.js

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
