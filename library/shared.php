<?php
	function callHook($url)
	{

		$urlArray = explode('/', $url);
		$controller = $urlArray[0]; 
		array_shift($urlArray);
		$action = $urlArray[0];	
		array_shift($urlArray);
		$querystring = $urlArray;

		$controllerName = $controller;

		 $controller = ucwords($controller);
		 $model = rtrim($controller, 's');  
		 $controller .= 'Controller';
		 $dispatch = new $controller($model, $controllerName, $action);
		 
		 if (method_exists($controller, $action))
		 {
			call_user_func_array(array($dispatch, $action), $querystring);
		 }
		 else
		 {
			echo "method ".$action."NOT FOUND";
		 }
	}
	
	function __autoload($classname)
	{
		if ( file_exists(ROOT.DS.'library'.DS.strtolower($classname).'.class.php'))
		{
			require_once(ROOT.DS.'library'.DS.strtolower($classname).'.class.php');
		}
		else if( file_exists(ROOT.DS.'application'.DS.'controllers'.DS.strtolower($classname).'.php'))
		{
			require_once(ROOT.DS.'application'.DS.'controllers'.DS.strtolower($classname).'.php');
		}
		else if ( file_exists(ROOT.DS.'application'.DS.'models'.DS.strtolower($classname).'.php'))
		{
			require_once(ROOT.DS.'application'.DS.'models'.DS.strtolower($classname).'.php');
		}
		else
		{
			echo $classname." NOT FOUND";
		}
	}
	
	callHook($url);
?>