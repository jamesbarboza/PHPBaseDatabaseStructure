<?php


include 'Database.php';


class BaseDatabaseModel{
  protected $fillable = [];
  protected $table = '';
  protected $connection = null;
  
  public function __construct(){
    $this->connection = new Database();
  }
  
  /*
  * find the specifi volunteer with id (primary key)
  */
  public function find($id){
    $query = "SELECT * FROM $this->table WHERE id=$id";
    $data = $this->connection->executeQuery($query);
    $row = $data->fetch_assoc();
    return $row;
  }
  
  /*
  * Get all the data in the table
  */
  public function findAll(){
    $query = "SELECT * FROM $this->table";
    return $this->connection->executeQuery($query);
  }
  
  /*
  * return data as per the key-value pair in the database
  */
  public function where($key, $value){
    $query = "SELECT * FROM $this->table WHERE $key='$value'";
    return $this->connection->executeQuery($query);
  }
  
  /*
  * Take the array of volunteer
  * run the database query
  */
  public function save($data){
    $values = implode("', '", $data);
    $keys = implode(", ", $this->fillable);
    $query = "INSERT INTO $this->table ($keys) VALUES ('$values')";
    return $this->connection->executeQuery($query);
  }
  
  /*
  * update the table in the Database
  * generic to every database model
  */
  public function update($id, $data){
    foreach($data as $key => $value){
      $query = "UPDATE $this->table SET $key='$value' WHERE id=$id";
      $this->connection->executeQuery($query);
    }
  }
}
 ?>