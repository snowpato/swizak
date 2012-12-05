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
			return $this->id;
		}
		
		function getCat(){
			return $this->cat;
		}
		
		function isBroken(){
			return intvalue($this->broken);
		}
	}
?>