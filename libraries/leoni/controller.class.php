<?php
class Controller {
     
    protected $_model;
    protected $_controller;
    protected $_action;
    protected $_template;
 
    function __construct($model, $controller, $action) {
        
        if (empty($model))
            $model = "index";
        if (empty($controller))
            $controller = "index";    
        
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_model = $model;
        if (class_exists($model))
            $this->$model = new $model;
        $this->_template = new Template($controller,$action);
        
 
    }
 
    function set($name,$value) {
        $this->_template->set($name,$value);
    }
 
    function __destruct() {
            $this->_template->render();
    }
         
}
