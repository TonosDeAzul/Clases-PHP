<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Model.php");
include_once("../clases/Apprentice.php");


if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $id = $_GET["id"];
  
  $database = new Database();
  $connection = $database->getConnection();
  
  $apprentice = new Apprentice($connection);

  $result = $apprentice->getById($id);

  // foreach ($result as $key => $value) {
  //   echo $value;
  // }

}
?>

<form action="Update.php" method="POST">
  <input type="hidden" value="<?php echo $result["id"] ?>" name="id">
  <div>
    <label for="name">Name:</label>
    <input id="name" name="name" type="text" value="<?php echo $result["name"] ?>">
  </div>
  <div>
    <label for="lastName">Last name:</label>
    <input id="lastName" name="lastName" type="text" value="<?php echo $result["lastName"] ?>">
  </div>
  <div>
    <label for="age">Age:</label>
    <input id="age" name="age" type="text" value="<?php echo $result["age"] ?>">
  </div>
  <div>
    <label for="gender">Gender:</label>
    <input id="gender" name="gender" type="text" value="<?php echo $result["gender"] ?>">
  </div>
  <div>
    <label for="career">Career:</label>
    <input id="career" name="career" type="text" value="<?php echo $result["career"] ?>">
  </div>
  <button type="submit">Send</button>
</form>
