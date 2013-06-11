<?php
	define('DS', DIRECTORY_SEPARATOR);
	//echo DS;
	define('ROOT', dirname(dirname(__FILE__)));
	//echo ROOT;
<<<<<<< HEAD
	$url = (isset($_GET['url'])) ? $url = $_GET['url']: header("location: ./users/homepage");
	//echo $url;
	session_start();
	require_once(ROOT.DS.'library'.DS.'bootstrap.php');		
=======
	$url = (isset ($_GET['url'])) ? $_GET['url'] : header("location: ./users/viewall");
	//echo $url;
	require_once (ROOT.DS.'library'.DS.'bootstrap.php');

>>>>>>> fd371491575cc67e869ab783563806ccdbd35f48
?>