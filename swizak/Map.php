<?php

	/***************************************************
	*	Swiss Zombie Army Knife
	****************************************************
	*	Por Patricio Pérez
	*	http://www.snowcorp.cl/apps/swizak
	*	contacto@snowcorp.cl
	****************************************************
	*	Versión 1.0
	*	XML Compatible: 2.171
	****************************************************/
	
	class Map{
		private $width;
		private $height;
		private $bonusPts;
		
		private $zDiscover;
		
		private $coords;
		
		function Map($map){
			$zDiscover = null;
			
			$this->width = $map['wid'];
			$this->height = $map['hei'];
			$this->bonusPts = $map['bonusPts'];
			
			foreach($map->zone as $key=>$zone){
				$this->addZoneDiscovered(new Zone($zone));
			}
		}
		
		function addZoneDiscovered($zone){
			$this->zDiscover[] = $zone;
		}
		
		function getZonesDiscovered(){
			return $this->zDiscover;
		}
		
		function getZonesVisited(){
			$zVisited = null;
			$zones = $this->getZonesDiscovered();
			foreach($zones as $key=>$zone){
				if($zone->visitedToday()){
					$zVisited[] = $zone;
				}
			}
			return $zVisited;
		}
		
	}
?>