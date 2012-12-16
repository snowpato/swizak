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
	
	class ItemBank{
		private $name;
		private $cont;
		private $id;
		private $cat;
		private $img;
		private $broken;
		
		function ItemBank($item){
			$this->name = $item['name'];
			$this->cont = $item['count'];
			$this->id = $item['id'];
			$this->cat = $item['cat'];
			$this->img = $item['img'];
			$this->broken = $item['broken'];
		}
		
		function getName(){
			return $this->name;
		}
		
		function getCount(){
			return $this->cont;
		}
		
		function getID(){
			return intval($this->id);
		}
		
		function getCat(){
			return $this->cat;
		}
		
		function getImage(){
			return $this->img;
		}
		
		function isBroken(){
			return intval($this->broken);
		}
	}
?>