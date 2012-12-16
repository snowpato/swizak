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
	
	class Citizens{
		private $citizens;
		
		function Citizens($citizens){
			$this->citizens = null;
			
			foreach($citizens->citizen as $key=>$citizen){
				$this->addCitizen(new Citizen($citizen));
			}
		}
		
		function addCitizen($citizen){
			$this->citizens[] = $citizen;
		}
		
		function getCitizenName($id){
			foreach($this->citizens as $key=>$citizen){
				if($citizen->getID() == $id){
					return $citizen->getName();
				}
			}
		}
		
		function getCitizenList(){
			return $this->citizens;
		}
		
		function getCitizen($id){
			foreach($this->citizens as $key=>$citizen){
				if($citizen->getID() == $id){
					return $citizen;
				}
			}
		}
		
		function getCoordsUsersOut(){
			foreach($this->citizens as $key=>$citizen){
				if($citizen->isOut()){
					$usr['id'][] = $citizen->getID();
					$usr['x'][] = $citizen->posX();
					$usr['y'][] = $citizen->posY();
				}
			}
			return $usr;
		}
		
		function citizensInZoneOut($x,$y){
			$c = null;
			
			foreach($this->citizens as $key=>$citizen){
				if($citizen->isOut() && $citizen->posX() == $x && $citizen->posY() == $y){
					$c[] = $citizen;
				}
			}
			
			return $c;
		}
		
		function citizensInZone($x,$y){
			$c = null;
			
			foreach($this->citizens as $key=>$citizen){
				if($citizen->posX() == $x && $citizen->posY() == $y){
					$c[] = $citizen;
				}
			}
			
			return $c;
		}
		
		function citizensInHome(){
			$c = null;
			
			foreach($this->citizens as $key=>$citizen){
				if(!$citizen->isOut()){
					$c[] = $citizen;
				}
			}
			
			return $c;
		}
		
		function countAlive(){
			$c = 0;
			
			foreach($this->citizens as $key=>$citizen){
				if($citizen->isAlive()){
					$c++;
				}
			}
			
			return $c;
		}
	}
	
?>