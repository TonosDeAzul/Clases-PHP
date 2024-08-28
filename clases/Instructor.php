<?php

include_once("Person.php");

class Intructor extends Person 
{
  private string $salary;
  private string $schedule;

  public function getSalary() { return $this->salary; }

  public function getSchedule() { return $this->schedule; }

  public function setSalary($salary) { $this->salary = $salary; }

  public function setSchedule($schedule) { $this->schedule = $schedule; }

}

?>