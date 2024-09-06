<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Model.php");
include_once("../clases/Apprentice.php");


if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $id = $_GET["id"];
  
  $database = new Database();
  $connection = $database->getConnection();
  
  $apprentice = new Apprentice($connection);

  $apprentice->delete($id);

  header("Location: ../views/list.php");

}
?>