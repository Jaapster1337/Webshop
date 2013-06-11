<?php
	function callHook($url)
	{
<<<<<<< HEAD

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
	
=======
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

>>>>>>> fd371491575cc67e869ab783563806ccdbd35f48
	callHook($url);
?>