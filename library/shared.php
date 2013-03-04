<?php
	function callHook($url)
	{
		/*commentaar geldt bij het ingeven van de volgende url:
		* users/viewall/1/2/3
		*/
		$urlArray = explode('/', $url);
		var_dump($urlArray);
		$controller = $urlArray[0]; //$controller = users
		echo($controller);
		array_shift($urlArray);	
		var_dump($urlArray);
		$action =$urlArray[0];		//$action = viewall
		echo $action;
		array_shift($urlArray);		//$querystring = array
		var_dump($urlArray);
	}

	function __autoload($classname)
	{


	}

	callHook($url);
?>