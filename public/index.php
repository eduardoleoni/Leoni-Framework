<?php    
//Basic
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

//Handy
define('LIB', ROOT . DS . 'libraries' . DS);
define('LEONILIB', LIB . 'leoni' . DS);
define('THIRDPARTY', LIB . '3rd' . DS);
define('PUBLICFOLDER', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));

if (isSet($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "index/index";
}

    
 
require_once (LEONILIB . 'bootstrap.php');