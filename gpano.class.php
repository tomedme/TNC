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
		$location = new stdClass();
		$location->pano = $this->id;
		$location->description = $this->desc;
		
		$links = array();
		foreach ($this->links as $k => $v) {
			$links[] = $this->getLinkObj($k, $v[0], $v[1]);
		}
		
		$tiles = $this->getTilesJsObj();
		
		return sprintf("\t\t%s: { location: %s, links: %s, tiles: %s }, \n", 
		               $this->id, json_encode($location), json_encode($links), $tiles);
	}
	
	private function getLinkObj($pano, $heading, $desc) {
		$link = new stdClass();
		$link->pano = 'p'. $pano;
		$link->heading = $heading;
		$link->description = $desc;
		
		return $link;
	}
	
	private function getTilesJsObj() {
		
		return sprintf("{ tileSize: new google.maps.Size(200, 149), worldSize: new google.maps.Size(800, 596), 
			centerHeading: %d, getTileUrl: getTncPanoramaTileUrl }", $this->heading);
	}
	
}