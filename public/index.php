<?php
	 define('DS', DIRECTORY_SEPARATOR);
	 //echo DS;
	 define('ROOT', dirname(dirname(__FILE__)));
	 //echo ROOT;
	 $url = (isset ($_GET['url'])) ? $_GET['url'] : header("location: ./users/viewall/1/2/3");
	 //echo $url;
	 require_once (ROOT.DS.'library'.DS.'bootstrap.php');
?>