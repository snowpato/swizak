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

	class Expedition{
		private $name;
		private $author;
		private $length;
		private $id;
		
		private $points;
		
		function Expedition($exp){
			$this->name = $exp['name'];
			$this->author = $exp['author'];
			$this->length = $exp['length'];
			$this->id = $exp['authorId'];
			
			$this->points = null;
			
			foreach($exp->point as $key=>$point){
				$this->points['x'][] = $point['x'];
				$this->points['y'][] = $point['y'];
			}
		}
		
		function getName(){
			return $this->name;
		}
		
		function getAuthor(){
			return $this->author;
		}
		
		function getLength(){
			return $this->name;
		}
		
		function getAuthorID(){
			return $this->id;
		}
		
		function getPositions(){
			return $this->points;
		}
	}
?>
