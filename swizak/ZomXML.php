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

	class ZomXML{
		private $url;
		private $language;
		
		private $key;
		private $skey;
		private $xml;
		
		private $xmlBrute;
		
		private $header;
		private $citizens;
		private $bank;
		private $city;
		private $expeditions;
		private $cadavers;
		private $map;
		private $upgrades;
		private $estimations;
		
		function ZomXML($language){
			$this->language = $language;
			switch($language){
				case "es":
					$this->url = "http://www.zombinoia.com/xml/";
					$this->statusurl = "http://www.zombinoia.com/xml/status";
					break;
				case "fr":
					$this->url = "http://www.hordes.fr/xml/";
					$this->statusurl = "http://www.hordes.fr/xml/status";
				case "en":
					$this->url = "http://www.die2nite.com/xml/";
					$this->statusurl = "http://www.die2nite.com/xml/status";
			}
			
		}
		
		function getStatus(){
			$xmlurl = $this->statusurl;
			$status = simplexml_load_file($xmlurl);
			return $status->status;
		}
		
		function setKey($k){
			$this->key = $k;
		}
		
		function setSKey($k){
			$this->skey = $k;
		}
		
		private function loadXML($xmlbase = ""){
			if(empty($xmlbase)){
				$super = (!empty($this->skey))?";".SKEY."=".$this->skey:"";
				$xmlurl = $this->url."?".KEY."=".$this->key.$super;
				
				$xmlbrute = file_get_contents($xmlurl);
				$this->xmlbrute = $xmlbrute;
				$xml = simplexml_load_string($xmlbrute);
			}
			else{
				$this->xmlbrute = $xmlbase;
				$xml = simplexml_load_string($xmlbase);
			}
			
			$this->xml = $xml;
			
			return $xml;
		}
		
		function getSimpleXML(){
			return $this->xml;
		}
		
		function getFullXML(){
			return $this->xmlbrute;
		}
		
		function setHeader($list){
			$this->header = new Header($list);
		}
		
		function getHeader(){
			return $this->header;
		}
		
		function setCitizens($list){
			$this->citizens = new Citizens($list);
		}
		
		function getCitizens(){
			return $this->citizens;
		}
		
		function setBank($list){
			$this->bank = new Bank($list);
		}
		
		function getBank(){
			return $this->bank;
		}
		
		function setCity($list){
			$this->city = new City($list);
		}
		
		function getCity(){
			return $this->city;
		}
		
		function setExpeditions($list){
			$this->expeditions = new Expeditions($list);
		}
		
		function getExpeditions(){
			return $this->expeditions;
		}
		
		function setCadavers($list){
			$this->cadavers = new Cadavers($list);
		}
		
		function getCadavers(){
			return $this->cadavers;
		}
		
		function setMap($list){
			$this->map = new Map($list);
		}
		
		function getMap(){
			return $this->map;
		}
		
		function setUpgrades($list){
			$this->upgrades = new Upgrades($list);
		}
		
		function getUpgrades(){
			return $this->upgrades;
		}
		
		function setEstimations($list){
			$this->estimations = new Estimations($list);
		}
		
		function getEstimations(){
			return $this->estimations;
		}
		
		function getURLImage($img){
			$url = $this->header->getIconURL();
			$url.= $img.".gif";
			return $url;
		}
		
		function load($key, $sk=""){
			$status =$this->getStatus();
			if(intval($status['open']) == 0) die($status['message']);
			
			$this->setKey($key);
			$this->setSKey($key);
			
			$xml = $this->loadXML();

			$header = $xml->headers;
			$this->setHeader($header);
			
			$data = $xml->data;
			$this->setCity($data->city);
			$this->setBank($data->bank);
			$this->setCitizens($data->citizens);
			$this->setExpeditions($data->expeditions);
			$this->setCadavers($data->cadavers);
			$this->setMap($data->map);
			$this->setUpgrades($data->upgrades);
			$this->setEstimations($data->estimations);
		}
		
		function reload($xmlbase){
			if(!empty($xmlbase)){
				$xml = $this->loadXML($xmlbase);

				$header = $xml->headers;
				$this->setHeader($header);
				
				$data = $xml->data;
				$this->setCity($data->city);
				$this->setBank($data->bank);
				$this->setCitizens($data->citizens);
				$this->setExpeditions($data->expeditions);
				$this->setCadavers($data->cadavers);
				$this->setMap($data->map);
				$this->setUpgrades($data->upgrades);
				$this->setEstimations($data->estimations);
			}
		}
		
	}
?>