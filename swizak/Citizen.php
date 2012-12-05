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
	
	class Citizen{
		private $dead;
		private $ban;
		private $hero;
		private $job;
		private $name;
		private $id;
		
		private $isOut;
		private $x;
		private $y;
		
		private $descr;
		
		function Citizen($citizen){
			$this->name = $citizen['name'];
			$this->dead = $citizen['dead'];
			$this->ban = $citizen['ban'];
			$this->job = $citizen['job'];
			$this->id = $citizen['id'];
			$this->out = $citizen['out'];
			$this->hero = $citizen['hero'];
			$this->x = $citizen['x'];
			$this->y = $citizen['y'];
			$this->descr = $citizen;
		}
		
		function isDead(){
			return intvalue($this->dead);
		}
		
		function isBan(){
			return intvalue($this->ban);
		}
		
		function isHero(){
			return intvalue($this->hero);
		}
		
		function getJob(){
			return $this->job;
		}
		
		function getID(){
			return $this->id;
		}
		
		function getName(){
			return $this->name;
		}
		
		function isOut(){
			return intvalue($this->out);
		}
		
		function posX(){
			return $this->x;
		}
		
		function posY(){
			return $this->y;
		}
	}
?>