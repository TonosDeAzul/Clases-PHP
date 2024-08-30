<?php

include_once("clases/Person.php");

class Model
{

  protected $id;
  protected $table;
  protected $db;

  public function __construct($id, $table, PDO $connection)
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

  public function paginator($page, $perPage)
  {
      // Calculate the offset based on the page number and items per page
      $offset = ($page - 1) * $perPage;
  
      // Prepare and execute the query with the offset and limit
      $statement = $this->db->prepare("SELECT * FROM {$this->table} LIMIT :offset, :limit");
      $statement->bindValue(":offset", $offset, PDO::PARAM_INT);
      $statement->bindValue(":limit", $perPage, PDO::PARAM_INT);
      $statement->execute();
  
      // Fetch all results
      $results = $statement->fetchAll();
  
      // Calculate the total number of rows
      $statement = $this->db->prepare("SELECT COUNT(*) FROM {$this->table}");
      $statement->execute();
      $totalRows = $statement->fetchColumn();
  
      // Calculate the total number of pages
      $totalPages = ceil($totalRows / $perPage);
  
      // Return the results, total rows, and total pages
      return [
          'results' => $results,
          'totalRows' => $totalRows,
          'totalPages' => $totalPages
      ];
  }

  public function getById($id)
  {
    $stament = $this->db->prepare("SELECT * FROM {$this->table} where id = :id");
    $stament->bindValue(":id", $id);
    $stament->execute();
    return $stament->fetch();
  }

  public function store($data)
  {
    // $name = $data['name'];
    // $lastName = $data['lastName'];
    // $age = $data['age'];
    // $gender = $data['gender'];
    // $career = $data['career'];

    // $stament = $this->db->prepare("INSERT INTO {$this->table} (name, lastName, age, gender, career) VALUES (:name, :lastName, :age, :gender, :career)");

    // $stament->bindValue(":name", $name);
    // $stament->bindValue(":lastName", $lastName);
    // $stament->bindValue(":age", $age);
    // $stament->bindValue(":gender", $gender);
    // $stament->bindValue(":career", $career);
    // $stament->execute();

    $stament = "INSERT INTO {$this->table} (";

    foreach ($data as $key => $value) {
      $stament .= "{$key}, ";
    }

    $stament = trim($stament,  ", ");
    $stament .= ") VALUES (";

    foreach ($data as $key => $value) {
      $stament .= ":{$key}, ";
    }

    $stament = trim($stament,  ", ");
    $stament .= ")";

    $sql = $this->db->prepare($stament);


    foreach ($data as $key => $value) {
      $sql->bindValue(":{$key}", $value);
    }

    $sql->execute();

    // echo $stament;
  }

  public function delete($id)
  {
    $stament = $this->db->prepare("DELETE FROM {$this->table} where id = :id");
    $stament->bindValue(":id", $id);
    $stament->execute();
  }

  public function update($id, $data)
  {
    $stament = "UPDATE {$this->table} SET";

    foreach ($data as $key => $value) {
      $stament .= " {$key} = :{$key}, ";
    }

    $stament = trim($stament,  ", ");
    $stament .= " WHERE id = :id";

    $sql = $this->db->prepare($stament);

    foreach ($data as $key => $value) {
      $sql->bindValue(":{$key}", $value);
    }

    $sql->bindValue(":id", $id);

    $stament = trim($stament,  ", ");

    echo $stament;

    $sql->execute();

    // var_dump($id, $data);
  }
}
