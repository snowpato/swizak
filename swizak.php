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
	
	define("KEY","k");
	define("SKEY","sk");
	define("FOLDER","swizak");
	
	function __autoload($nombre_clase) {
		$load = FOLDER."/$nombre_clase.php";
		if(file_exists($load)) include $load;
	}
?>