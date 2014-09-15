<?php    
//Basic
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

//Handy
define('LIB', ROOT . DS . 'libraries' . DS);
define('LIONLIB', LIB . 'lion' . DS);
 

if (isSet($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "/index";
}
    
 
require_once (LIONLIB . 'bootstrap.php');