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

	class Zone{
		private $x;
		private $y;
		private $notvisited;
		private $tag;
		
		
		private $dried;
		private $zombies;
		
		private $build;
		private $buildname;
		private $buildtype;
		private $builddig;
		private $builddet;
		
		private $items;
		
		function Zone($zone){
			$this->items = null;
			
			$this->x = $zone['x'];
			$this->y = $zone['y'];
			$this->notvisited = $zone['nvt'];
			$this->tag = $zone['tag'];
			$this->dried = $zone['dried'];
			$this->zombies = $zone['z'];
			
			$build = $zone->building;
			
			$this->build = (!empty($build))?1:0;
			
			if($this->build){
				$this->buildname = $build['name'];
				$this->buildtype = $build['type'];
				$this->builddig = $build['dig'];
				$this->builddet = $build;
			}
			
			foreach($zone->item as $key=>$item){
				$this->addItem(new Item($item));
			}
		}
		
		function addItem($item){
			$this->items[] = $item;
		}
		
		function getItems($item){
			return $this->items;
		}
		
		function getX(){
			return $this->x;
		}
		
		function getY(){
			return $this->y;
		}
		
		function getCoords(){
			$c['x'] = $this->getX();
			$c['y'] = $this->getY();
			return $c;
		}
		
		function notVisitedToday(){
			return intval($this->notvisited);
		}
		
		function visitedToday(){
			return !$this->notVisitedToday();
		}
		
		function getTag(){
			return $this->tag;
		}
		
		function isDried(){
			return intval($this->dried);
		}
		
		function getZombies(){
			return $this->zombies;
		}
		
		function haveBuild(){
			return $this->build;
		}
		
		function getBuildName(){
			return $this->buildname;
		}
		
		function getBuildType(){
			return $this->buildtype;
		}
		
		function getBuildDig(){
			return $this->builddig;
		}
		
		function getBuildDescr(){
			return $this->builddet;
		}
	}
?>