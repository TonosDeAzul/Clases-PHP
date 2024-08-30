<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Model.php");
include_once("../clases/Apprentice.php");

$database = new Database();
$connection = $database->getConnection();
// var_dump($connection);

$apprentice = new Apprentice($connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name     = $_POST['name'];
  $lastName = $_POST['lastName'];
  $age      = $_POST['age'];
  $gender   = $_POST['gender'];
  $career   = $_POST['career'];

  $apprentice->store(
    [
      'name'      => $_POST['name'],
      'lastName'  => $_POST['lastName'],
      'age'       => $_POST['age'],
      'gender'    => $_POST['gender'],
      'career'    => $_POST['career']
    ]
  );
}
