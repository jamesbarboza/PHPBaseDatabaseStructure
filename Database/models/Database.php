<?php
  class Database{
    
    protected $username = "";
    protected $password = "";
    protected $host = "";
    protected $database = "";
    protected $conn = null;
    
    public function __construct(){
      $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
      if($this->conn->connect_error)  die($this->conn->connect_error);
    }
    
    public function executeQuery($query){
      return $this->conn->query($query);
    }
    
    public function close(){
      $this->conn->close();
    }
  }
 ?>