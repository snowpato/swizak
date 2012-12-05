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
	
	class Estimation{
		private $day;
		private $max;
		private $min;
		private $maxed;
		
		function Estimation($est){
			$this->day = $est['day'];
			$this->max = $est['max'];
			$this->min = $est['min'];
			$this->maxed = $est['maxed'];
		}
		
		function getDay(){
			return $this->day;
		}
		
		function getMax(){
			return $this->max;
		}
		
		function getMin(){
			return $this->min;
		}
		
		function isMaxed(){
			return intval($this->maxed);
		}
	}
	
?>