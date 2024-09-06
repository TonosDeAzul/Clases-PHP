<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Model.php");
include_once("../clases/Apprentice.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST["id"];

  $database = new Database();
  $connection = $database->getConnection();

  $apprentice = new Apprentice($connection);

  // $name = $_GET["name"];
  // $lastName = $_GET["lastName"];
  // $age = $_GET["age"];
  // $gender = $_GET["gender"];
  // $career = $_GET["career"];

  $apprentice->update($id, 
    [
      'name' => $name = $_POST["name"],
      'lastName' => $lastName = $_POST["lastName"],
      'age' => $age = $_POST["age"],
      'gender' => $gender = $_POST["gender"],
      'career' => $career = $_POST["career"],
    ]
  );

  header("Location: ../views/list.php");

}
    
?>