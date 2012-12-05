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
	
	class Estimations{
		private $estimations;
		
		function Estimations($estimations){
			$this->estimations = null;
			
			foreach($estimations->e as $key=>$est){
				$this->addEstimation(new Estimation($est));
			}
		}
		
		function addEstimation($est){
			$this->estimations[] = $est;
		}
		
		function getEstimationList(){
			return $this->estimations;
		}
	}
?>