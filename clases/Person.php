<?php

require_once("libs/Database.php");
require_once("libs/Model.php");

class Person extends Model
{
  protected ?string $name;
  protected ?string $lastName;
  protected int $age;
  protected ?string $gender;
  protected ?string $career;

  // public function __construct() { echo "I'am a constructor"; }

  public function __construct( $id, $table, PDO $connection )
  {
    parent::__construct($id, $table, $connection);
  }

  public function getName() { return $this->name; }

  public function getLastName() { return $this->lastName; }

  public function getAge() { return $this->age; }

  public function getGender() { return $this->gender; }

  public function getCareer() { return $this->career; }

  public function setName($name) { $this->name = $name; }

  public function setLastName($lastName) { $this->lastName = $lastName; }

  public function setAge($age) { $this->age = $age; }

  public function setGender($gender) { $this->gender = $gender; }

  public function setCareer($career) { $this->career = $career; }

  function greet() { return "<b> Hi, am" .  " " . $this->name . " " . $this->lastName . "</b>"; }

}

?>