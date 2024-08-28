<?php

include_once("Person.php");

class Apprentice extends Person 
{
  private string $account;
  private string $average;

  public function __construct( PDO $connection )
  {
    parent::__construct('id', 'users', $connection);
  }

  public function getAccount() { return $this->account; }

  public function getAverage() { return $this->average; }

  public function setAccount($account) { $this->account = $account; }

  public function setAverage($average) { $this->average = $average; }

  public function cancelRegistration() {
    echo "<p> Cancelar la matrícula del aprendiz " . $this->name . "</p>";
  }

}

?>