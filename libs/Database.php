<?php

class Database 
{

  private $connection;

  public function __construct()
  {

    $options = 
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ];

    $this->connection = new PDO("mysql:host=127.0.0.1; dbname=practicaphp", "root", "", $options);
    $this->connection->exec("SET CHARACTER SET UTF8");

  }

  function getConnection() { return $this->connection; }

  function closeConnection() { $this->connection = null; }

}

?>