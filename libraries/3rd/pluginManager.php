<?php
class PluginManager{
    
    public function addPlugin($name){
        require_once(THIRDPARTY . $name . DS . 'index.php');
    }
}