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
	
	class Header{
		private $link;
		private $iconurl;
		private $secure;
		private $avatarurl;
		
		private $days;
		private $quarantine;
		private $daytime;
		private $townid;
		
		private $owner;
		
		function Header($head){
			$this->link = $head['link'];
			$this->iconurl = $head['iconurl'];
			$this->secure = $head['secure'];
			$this->avatarurl = $head['avatarurl'];
			
			$game = $head->game;
			
			$this->days = $game['days'];
			$this->quarantine = $game['quarantine'];
			$this->daytime = $game['datetime'];
			$this->townid = $game['id'];
			
			if(!empty($head->owner)) $this->owner = new Owner($head->owner);
		}
		
		function getLink(){
			return $this->link;
		}
		
		function getOwner(){
			return $this->owner;
		}
		
		function getIconURL(){
			return $this->iconurl;
		}
		
		function getAvatarURL(){
			return $this->avatarurl;
		}
		
		function getDays(){
			return $this->days;
		}
		
		function getQuarantine(){
			return $this->quarantine;
		}
		
		function getDaytime(){
			return $this->daytime;
		}
		
		function getTownID(){
			return $this->townid;
		}
	}
?>