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
	
	class Upgrade{
		private $name;
		private $level;
		private $idBuild;
		private $descr;
		
		function Upgrade($upgrade){
			$this->name = $upgrade['name'];
			$this->level = $upgrade['level'];
			$this->idBuild = $upgrade['buildingId'];
			$this->descr = $upgrade;
		}
		
		function getName(){
			return $this->name;
		}
		
		function getLevel(){
			return $this->level;
		}
		
		function getID(){
			return $this->idBuild;
		}
		
		function getDescr(){
			return $this->descr;
		}
		
	}
?>