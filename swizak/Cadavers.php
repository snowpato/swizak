<?php

	/***************************************************
	*	Swiss Zombie Army Knife
	****************************************************
	*	Por Patricio P�rez
	*	http://www.snowcorp.cl/apps/swizak
	*	contacto@snowcorp.cl
	****************************************************
	*	Versi�n 1.0
	*	XML Compatible: 2.171
	****************************************************/
	
	class Cadavers{
		private $cadavers;
		
		function Cadavers($list){
			$cadavers = null;
			foreach($list->cadaver as $key=>$cadaver){
				$this->addCadaver(new Cadaver($cadaver));
			}
		}
		
		function addCadaver($dead){
			$this->cadavers[] = $dead;
		}
		
		function getCadaverList(){
			return $this->cadavers;
		}
		
		function countDead(){
			$c = 0;
			
			foreach($this->cadavers as $cadaver){
				$c++;
			}
			
			return $c;
		}
	}
?>