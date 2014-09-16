<?php

class HTML{
    
    public static function css($source){
        echo '<link rel="stylesheet" type="text/css" href="' . PUBLICFOLDER . 'css' . DS . $source . '">';
    }
    
    public static function js($source){
        echo '<script src="' . PUBLICFOLDER . 'js' . DS . $source . '"></script>';
    }
    
    public static function img($source, $args=array()){
        $img = '<img src="' . PUBLICFOLDER . 'img' . DS . $source . '"';
        
        foreach ($args as $argKey=>$arg){
            $img .= $argKey . ' = "' . $arg . '" ';
        }
        
        $img .= "/>";
        
        echo $img;
    }
    
}
