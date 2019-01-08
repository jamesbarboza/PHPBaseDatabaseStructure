<?php

  /*
  * include the Database model inorder for the migration to work
  */

  $connection = new Database();

  $query = 'CREATE TABLE users(
    id INT NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password VARCHAR(255) NOT NULL,
    created_at VARCHAR(255) NOT NULL,
    PRIMARY KEY(id));';
  
  echo $connection->executeQuery($query);