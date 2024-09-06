<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Model.php");

include_once("../clases/Apprentice.php");

$database = new Database();
$connection = $database->getConnection();

$apprentice = new Apprentice($connection);
$users = $apprentice->getAll();

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// for ($i=0; $i < count($users); $i++) {
//   echo "<pre>";
//   print_r($users[$i]);
//   echo "</pre>";
// }

?>

<h1>FOR</h1>
<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Last name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Career</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      for ($i=0; $i < count($users); $i++) {
    ?>
      <tr>
        <td><?php echo $users[$i]["id"] ?></td>
        <td><?php echo $users[$i]["name"] ?></td>
        <td><?php echo $users[$i]["lastName"] ?></td>
        <td><?php echo $users[$i]["age"] ?></td>
        <td><?php echo $users[$i]["gender"] ?></td>
        <td><?php echo $users[$i]["career"] ?></td>
        <td style="display: flex;">
          <form action="../controllers/Edit.php" method="GET" style="margin-bottom: 0px;">
            <input type="hidden" value="<?php echo $users[$i]["id"] ?>" name="id">
            <button>Editar</button>
          </form>
          <form action="../controllers/Delete.php" method="GET" style="margin-bottom: 0px;">
            <input type="hidden" value="<?php echo $users[$i]["id"] ?>" name="id">
            <button>Eliminar</button>
          </form>
        </td>
    <?php
      }
    ?>
    </tr>
  </tbody>
</table>

<!-- <h1>FOREACH</h1>
<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Last name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Career</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($users as $user => $value) {
    ?>
      <tr>
        <td><?php echo $value["id"] ?></td>
        <td><?php echo $value["name"] ?></td>
        <td><?php echo $value["lastName"] ?></td>
        <td><?php echo $value["age"] ?></td>
        <td><?php echo $value["gender"] ?></td>
        <td><?php echo $value["career"] ?></td>
        <td>
          <a href="<?php $value["id"]?>">Editar</a>
          <a href="">Eliminar</a>
        </td>
    <?php
      }
    ?>
    </tr>
  </tbody>
</table> -->