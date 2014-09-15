<?php
class Model extends SQLQuery {
    protected $_model;
 
    function __construct() {
 
        $this->connect(LEONI_DB_HOST,LEONI_DB_USER,LEONI_DB_PASSWORD,LEONI_DB_NAME);
        $this->_model = get_class($this);
        $this->_table = strtolower($this->_model)."s";
    }
 
    function __destruct() {
    }
}