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
	
	class Cadaver{
		private $name;
		private $dtype;
		private $id;
		private $day;
		private $message;
		
		function Cadaver($dead){
			$this->name = $dead['name'];
			$this->dtype = $dead['dtype'];
			$this->id = $dead['id'];
			$this->day = $dead['day'];
			$this->message = $dead;
		}
		
		function getName(){
			return $this->name;
		}
		
		function getDType(){
			return $this->dtype;
		}
		
		function getID(){
			return $this->id;
		}
		
		function getDay(){
			return $this->day;
		}
		
		function getMessage(){
			return $this->message;
		}
	}
?>