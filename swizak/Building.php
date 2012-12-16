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
	
	class Building{
		private $name;
		private $temp;
		private $parental;
		private $id;
		private $img;
		private $descr;
		
		function Building($building){
			$this->name = $building['name'];
			$this->temp = $building['temporary'];
			$this->parental = $building['parent'];
			$this->id = $building['id'];
			$this->img = $building['img'];
			$this->descr = $building;
		}
		
		function getName(){
			return $this->name;
		}
		
		function isTemp(){
			return intvalue($this->temp);
		}
		
		function getParent(){
			return $this->parental;
		}
		
		function isParent(){
			if(empty($this->parental)) return true;
			else return false;
		}
		
		function getID(){
			return $this->id;
		}
		
		function getImage(){
			return $this->img;
		}
		
		function getDescription(){
			return $this->descr;
		}
	}
?>