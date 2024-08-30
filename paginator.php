<?php

require_once(__DIR__ . "/libs/Database.php");
require_once(__DIR__ . "/libs/Model.php");

include_once("clases/Apprentice.php");

$database = new Database();
$connection = $database->getConnection();

$apprentices = new Apprentice($connection);

$result = $apprentices->paginator(1, 2);

foreach ($result as $key => $value) {
  var_dump($value);
}