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
		
		function getWidth(){
			return $this->width;
		}
		
		function getHeight(){
			return $this->height;
		}
		
		function getZone($x, $y){
			$zones = $this->getZonesDiscovered();
			
			foreach($zones as $key=>$zone){
				if($zone->getX() == $x && $zone->getY() == $y){
					return $zone;
				}
			}
			return;
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
		
		function isZoneVisited($x,$y){
			$zVisited = $this->getZonesVisited();
			
			foreach($zVisited as $key=>$zone){
				if($zone->getX() == $x and $zone->getY() == $y){
					return 1;
				}
			}
			return 0;
		}
		
		function isZoneDiscovered($x,$y){
			$zones = $this->getZonesDiscovered();
			foreach($zones as $key=>$zone){
				if($zone->getX() == $x && $zone->getY() == $y){
					return 1;
				}
			}
			return 0;
		}
		
		function zoneHaveRuin($x,$y){
			$zones = $this->getZonesDiscovered();
			foreach($zones as $key=>$zone){
				if($zone->getX() == $x && $zone->getY() == $y){
					if($zone->haveBuild()) return 1;
				}
			}
			return 0;
		}
		
		function getZombieCount($x,$y){
			$zones = $this->getZonesDiscovered();
			
			foreach($zones as $key=>$zone){
				if($zone->getX() == $x and $zone->getY() == $y){
					return $zone->getZombies();
				}
			}
			return 0;
		}
		
		function getTagImg($x,$y){
			$zones = $this->getZonesDiscovered();
			
			foreach($zones as $key=>$zone){
				if($zone->getX() == $x and $zone->getY() == $y){
					$tag = $zone->getTag();
					switch($tag){
						case 5:
							return "small_broken";
					}
				}
			}
			return 0;
		}
		
	}
?>