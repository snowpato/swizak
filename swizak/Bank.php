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
	
	class Bank{
		private $items;
		
		function Bank($list){
			$this->items = null;
			
			foreach($list->item as $key=>$item){
				$this->addItem(new ItemBank($item));
			}
		}
		
		function addItem($item){
			$this->items[] = $item;
		}
		
		function getItems(){
			return $this->items;
		}
		
		function getItem($id){
			foreach($this->items as $key=>$item){
				if($item->getID() == $id){
					return $item;
				}
			}
			return null;
		}
		
		function getItemsPerCategory($cat){
			$array = null;
			
			foreach($this->items as $key=>$item){
				if($item->getCat() == $cat){
					$array[] = $item;
				}
			}
			
			return $array;
		}
		
	}
?>