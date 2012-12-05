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
	
	class Upgrades{
		private $total;
		private $upgrades;
		
		function Upgrades($upgrade){
			$this->upgrade = null;
			$this->total = $upgrade['total'];
			
			foreach($upgrade->up as $key=>$upgr){
				$this->addUpgrade(new Upgrade($upgr));
			}
		}
		
		function addUpgrade($upgr){
			$this->upgrades[] = $upgr;
		}
		
		function getUpgradeList(){
			return $this->upgrades;
		}
	}
?>