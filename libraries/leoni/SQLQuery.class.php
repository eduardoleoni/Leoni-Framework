<?php
 
class SQLQuery {
    protected $_dbHandle;
 
    /** Connects to database **/
 
    public function __construct() {
        
        $this->connect(LEONI_DB_HOST, LEONI_DB_USER, LEONI_DB_PASSWORD, LEONI_DB_NAME);
        
    }
    
    function connect($address, $account, $pwd, $name) {
        
        $this->_dbHandle = new mysqli($address, $account, $pwd, $name);
        
        if ($this->_dbHandle->connect_error) {
            return 0;
        }else{
            return 1;
        }
    }
 
    /** Disconnects from database **/
    function disconnect() {
        $this->_dbHandle->close();
        return 1;
    }
     
    /*function selectAll() {
        $query = 'select * from `'.$this->_table.'`';
        return $this->query($query);
    }
     
    function select($id) {
        $query = 'select * from `'.$this->_table.'` where `id` = \''.mysql_real_escape_string($id).'\'';
        return $this->query($query, 1);    
    }*/
 
     
    /** Custom SQL Query **/
    function query($query) {
        
        $result = $this->_dbHandle->query($query);
        return $result;

    }
 
    /** Get number of rows **/
    function getNumRows() {
        return $this->_dbHandle->num_rows($this->_result);
    }

    /** Get error string **/

    function getError() {
        return $this->_dbHandle->error();
    }
}