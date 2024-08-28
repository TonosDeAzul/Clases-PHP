<?php

include_once("clases/Person.php");

class Model
{

  protected $id;
  protected $table;
  protected $db;

  public function __construct( $id, $table, PDO $connection )
  {
    $this->id = $id;
    $this->table = $table;
    $this->db = $connection;
  }

  public function getAll() 
  {
    $stament = $this->db->prepare("SELECT * FROM {$this->table}");
    $stament->execute();
    return $stament->fetchAll();
  }

  public function getById($id) 
  {
    $stament = $this->db->prepare("SELECT * FROM {$this->table} where id = :id");
    $stament->bindValue(":id", $id);
    $stament->execute();
    return $stament->fetch();
  }

  public function insert()
  {
    
  }

}