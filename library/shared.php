<?php
	function callHook($url)
	{
		/* Commentaar geldt voor bij het ingeven van de volgende url:
		 * users/viewall/1/2/3
		 */
		 
		echo $urlArray = explode('/', $url);
		var_dump($urlArray);
		$controller = $urlArray[0];	//$controller = users
		echo $controller;
		array_shift($urlArray);
		var_dump($urlArray);
		$action = $urlArray[0];
		echo $action;				//$action = viewall()
		array_shift($urlArray);
		var_dump($urlArray);
		$querystring = $urlArray; //querystring = array(1, 2, 3)
		var_dump($querystring);
	}
	
	function __autoload($classname)
	{
	
	}
	
	callHook($url);
?>