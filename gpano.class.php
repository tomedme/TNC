<?php

class GPano {
	
	public $id;
	public $links;
	public $tiles;
	
	public function __construct($id, $desc, $links, $heading = 0) {
		$this->id = 'p'. $id;
		$this->desc = $desc;
		$this->links = $links;
		$this->heading = $heading;
	}
	
	public function __toString() {
		
		$pano = new stdClass();
		
		$location = new stdClass();
		$location->pano = $this->id;
		$location->description = $this->desc;
		
		$pano->location = $location;
		
		$links = array();
		foreach ($this->links as $k => $v) {
			$links[] = $this->getLinkObj($k, $v[0], $v[1]);
		}
		$pano->links = $links;
		
		$pano->tiles = $this->getTilesObj();
		
		return sprintf("\t\t%s: %s, \n", $this->id, json_encode($pano));
	}
	
	private function getLinkObj($pano, $heading, $desc) {
		$link = new stdClass();
		$link->pano = 'p'. $pano;
		$link->heading = $heading;
		$link->desc = $desc;
		
		return $link;
	}
	
	private function getTilesObj() {
		$tiles = new stdClass();
		$tiles->tileSize = 'new google.maps.Size(200, 149)';
		$tiles->worldSize = 'new google.maps.Size(800, 596)';
		$tiles->centerHeading = $this->heading;
		$tiles->getTileUrl = 'getTncPanoramaTileUrl';
		
		return $tiles;
		// return sprintf('{tileSize: new google.maps.Size(200, 149),worldSize: new google.maps.Size(800, 596),centerHeading:%d,getTileUrl:"getTncPanoramaTileUrl"}', $this->heading);
	}
	
}