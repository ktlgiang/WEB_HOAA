<?php
class Database {
    private $_dbh = null;
    private $_sql = '';
    private $_cursor = null;        
    
    // Constructor to initialize database connection
    public function __construct() {
        try {
            $this->_dbh = new PDO('mysql:host=localhost;dbname=wikicach_hoa', 'root', '');
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_dbh->exec('SET NAMES "utf8"');
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    // Function to set SQL query
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    // Function to execute the query
    public function execute($options = array()) {
        if (!$this->_sql) {
            return false;
        }

        $this->_cursor = $this->_dbh->prepare($this->_sql);
        
        if ($options) {  // If there are $options, bind parameters
            for ($i = 0; $i < count($options); $i++) {
                $this->_cursor->bindParam($i + 1, $options[$i]);
            }
        }
        
        $this->_cursor->execute();
        return $this->_cursor;
    }
    
    // Function to load all rows
    public function loadAllRows($options = array()) {
        $result = $options ? $this->execute($options) : $this->execute();
        return $result ? $result->fetchAll(PDO::FETCH_OBJ) : false;
    }
    
    // Function to load a single row
    public function loadRow($options = array()) {
        $result = $options ? $this->execute($options) : $this->execute();
        return $result ? $result->fetch(PDO::FETCH_OBJ) : false;
    }
    
    // Function to load a single record (single column value)
    public function loadRecord($options = array()) {
        $result = $options ? $this->execute($options) : $this->execute();
        return $result ? $result->fetch(PDO::FETCH_COLUMN) : false;
    }
    
    // Function to get the last inserted ID
    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    // Function to disconnect the database
    public function disconnect() {
        $this->_dbh = null;
    }
}
?>
