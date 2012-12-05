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
	
	class City{
		private $name;
		private $door;
		private $water;
		private $chaos;
		private $devast;
		private $x;
		private $y;
		private $hard;
		
		private $buildings;
		
		private $lastZombies;
		private $lastDefense;
		private $lastNews;
		
		private $defbase;
		private $defitems;
		private $defguardians;
		private $defhomes;
		private $defupgrades;
		private $defbuildings;
		private $deftotal;
		private $defmult;
		
		function City($city){
			$this->buildings = null;
			
			$this->name = $city['city'];
			$this->door = $city['door'];
			$this->water = $city['water'];
			$this->chaos = $city['chaos'];
			$this->devast = $city['devast'];
			$this->x = $city['x'];
			$this->y = $city['y'];
			$this->hard = $city['hard'];
			
			$def = $city->defense;
			
			$this->defbase = $def['base'];
			$this->defitems = $def['items'];
			$this->defguardians = $def['citizen_guardians'];
			$this->defhomes = $def['citizen_homes'];
			$this->defupgrades = $def['upgrades'];
			$this->defbuildings = $def['buildings'];
			$this->deftotal = $def['total'];
			$this->defmult = $def['itemsMul'];
			
			$news = $city->news;
			
			$this->lastZombies = $news['z'];
			$this->lastDefense = $news['def'];
			$this->lastNews = $news->content;

			foreach($city->building as $key=>$building){
				$this->addBuilding(new Building($building));
			}
		}
		
		function posXFromCity($x){
			return $this->x - $x;
		}
		
		function posYFromCity($y){
			return $this->y - $y;
		}
		
		function getKmFromCity($x,$y){
			return round( sqrt( pow( $this->posXFromCity($x) , 2 ) + pow( $this->posYFromCity($y) , 2 ) ) );
		}
		
		function addBuilding($building){
			$this->buildings[] = $building;
		}
		
		function getBuildings(){
			return $this->buildings;
		}
		
		function isHard(){
			$hard = (!empty($this->hard))?1:0;
			return $hard;
		}
		
	}
	
?>