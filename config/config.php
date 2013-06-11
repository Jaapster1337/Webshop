<?php
 $database = 0;
 switch ($database)
 {
	case 0:
		define('SERVERNAME', 'localhost');
		define('USERNAME', 'root');
		define('PASSWORD', 'geheim');
		define('DATABASE', 'websitefotosjaak');
		date_default_timezone_set("Europe/Amsterdam");
		break;
	case 1:
		define('SERVERNAME', '');
		define('USERNAME', '');
		define('PASSWORD', '');
		define('DATABASE', '');
		break;
	case 3:
		define('SERVERNAME', '');
		define('USERNAME', '');
		define('PASSWORD', '');
		define('DATABASE', '');
		break;
	default:
		break;
 }
?>