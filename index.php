<?php

  require_once(__DIR__ . "/libs/Database.php");
  require_once(__DIR__ . "/libs/Model.php");

  include_once("clases/Apprentice.php");

  $database = new Database();
  $connection = $database->getConnection();
  var_dump($connection);

  $apprentice = new Apprentice($connection);

  // $result = $apprentice->getAll();

  // foreach ($result as $i) {
  //   foreach ($i as $y) {
  //     echo $y;
  //   }
  // }

  $result = $apprentice->getById(1);

  foreach ($result as $i) {
    echo $i;
  }

  // var_dump($result);


  // var_dump($result);

  // include_once("clases/Person.php"); 

  // $instructor = new Person();

  // $persona->setName("Daniel");
  // $persona->setLastName("Gómez");

  // $saludar = $persona->greet();

  // echo $saludar;

  // echo "<br>" . $persona->getName();

  // Instaciamos la clase de Instructor que hereda de la clase Person
  // include_once("clases/Instructor.php");
  
  // $instructor = new Intructor();
  // $instructor->setName("John");
  // $instructor->setLastName("Becerra");
  
  // echo $instructor->greet();

  // echo "<br>"; 
  // echo "<br>";

  // // Instaciamos la clase de Apprentice que hereda de la clase Person
  // include_once("clases/Apprentice.php");
  
  // $apprentice = new Apprentice();
  // $apprentice->setName("Daniel");
  // $apprentice->setLastName("Gómez");
  
  // echo $apprentice->greet();

  // echo "<br>"; 

  // // Instaciamos la clase de Apprentice que hereda de la clase Person
  // include_once("clases/Apprentice.php");

  // $apprentice2 = new Apprentice();

  // $apprentice2->setName("Brayan");
  // $apprentice2->setLastName("Riaño");

  // echo $apprentice2->cancelRegistration();

?>