<?php

class FORM{
    
    public static function open($args=array()){
        $form = '<form ';
        
        $form .= FORM::argumentAttacher($args);
        
        echo $form;
    }
    
    public static function close(){
        echo "</form>";
    }
    
    public static function input($args=array()){
        $input = '<input ';
        
        $input .= FORM::argumentAttacher($args);
        
        $input .= " />";
        
        echo $input;
        
    }
    
    public static function button($args=array()){
        $args["type"] = "button";
       
        FORM::input($args);
    }
    
    protected static function argumentAttacher($args=array()){
        $return = "";
        foreach ($args as $argKey=>$arg){
            $return .= $argKey . ' = "' . $arg . '" ';
        }
        
        return $return;
        
    }
    
   
}
