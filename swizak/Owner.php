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
	
	class Owner{
		private $citizen;
		private $zone;
		
		function Owner($owner){
			$this->cityzen = new Citizen($owner->cityzen);
			$this->zone = new Zone($owner->myZone);
		}
		
		function zoneIsDried($x,$y){
			if($zone->getX() == $x && $zone->getY() == $y){
				if($zone->isDried()) return 1;
			}
			return 0;
		}
	}
	
?>