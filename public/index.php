<?php
	define('DS', DIRECTORY_SEPARATOR);
	//echo DS;
	define('ROOT', dirname(dirname(__FILE__)));
	//echo ROOT;
	$url = (isset($_GET['url'])) ? $url = $_GET['url']: header("location: ./users/homepage");
	//echo $url;
	session_start();
	require_once(ROOT.DS.'library'.DS.'bootstrap.php');		
?>