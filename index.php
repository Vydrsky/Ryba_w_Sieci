<?php

session_start();
define('ROOT_PATH', dirname(__FILE__));
$logicStateArray = array('start','shop','login','register','galery', 'cart', 'news', 'concrete_news'); //ADD NEW STATE WHEN NECESSARY

$logicStateArray = array('start','shop','login','register','galery', 'cart', 'news', 'concrete_news'); //ADD NEW STATE WHEN NECESSARY
$state = "start"; 

if (array_key_exists('state', $_GET)) {
	if (in_array($_GET['state'], $logicStateArray)) {
		$state = $_GET['state'];
	}
    else{
        $state = "notfound";
    }
}

require(ROOT_PATH . DIRECTORY_SEPARATOR . "back" . DIRECTORY_SEPARATOR . $state . "_back.php");
require(ROOT_PATH . DIRECTORY_SEPARATOR . "front" . DIRECTORY_SEPARATOR . $state . "_front.php");
