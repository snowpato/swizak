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

	class Expeditions{
		private $expeditions;
		
		function Expeditions($list){
			$expeditions = null;
			foreach($list->expedition as $key=>$expedition){
				$this->addExpedition(new Expedition($expedition));
			}
		}
		
		function addExpedition($expe){
			$this->expeditions[] = $expe;
		}
		
		function getExpeditionList(){
			return $this->expeditions;
		}
		
		function inRange($int,$min,$max){
			return ($int>=$min && $int<=$max)?1:0;
		}
		
		function isInPos($i, $ref, $dif){
			return ( $dif == 0 && $i == $ref )?1:0;
		}
		
		function getOrientationPoints($name){
			$list = $this->expeditions;
			$expOrientationPoints = null;
		}
		
		function verifyExpPoint($x,$y){
			$list = $this->expeditions;
			$expIDList = null;
			
			foreach($list as $key=>$exp){
				$points = $exp->getPositions();
				$length = count($points['x']);

				for($i=1;$i<$length;$i++){
					$x1 = intval($points['x'][$i-1]);
					$y1 = intval($points['y'][$i-1]);
					$x2 = intval($points['x'][$i]);
					$y2 = intval($points['y'][$i]);
					
					$difx = $x2-$x1;
					$dify = $y2-$y1;
					
					$maxx = max($x1,$x2);
					$minx = min($x1,$x2);
					$maxy = max($y1,$y2);
					$miny = min($y1,$y2);
					
					$posx = $this->isInPos($x,$x1,$difx);
					$posy = $this->isInPos($y,$y1,$dify);
					$rangey = $this->inRange($y,$miny,$maxy);
					$rangex = $this->inRange($x,$minx,$maxx);
					
					if( ($posx && $rangey) || ($posy && $rangex) ){
						$expIDList[] = $exp->getName();
					}
				}
			}
			
			return $expIDList;
		}
	}
	
?>