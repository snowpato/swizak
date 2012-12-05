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