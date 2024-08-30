<?php

// require_once(__DIR__ . "/libs/Database.php");
// require_once(__DIR__ . "/libs/Model.php");

// include_once("clases/Apprentice.php");

// $database = new Database();
// $connection = $database->getConnection();
// var_dump($connection);

// $apprentice = new Apprentice($connection);

// $result = $apprentice->getAll();

// foreach ($result as $i) {
//   foreach ($i as $y) {
//     echo $y;
//   }
// }

// $result = $apprentice->getById(1);

// foreach ($result as $i) {
//   echo $i;
// }

// $apprentice->store(
//   [
//     'name' => 'Juan',
//     'lastName' => 'Doe',
//     'age' => 18,
//     'gender' => 'Masculino',
//     'career' => 'ADSO',
//     'account' => 'doe@gmail.com',
//     'average' => '49'
//   ]
// )

// $apprentice->update(4, 
//   [
//     'lastName' => 'San Juan',
//   ]
// );

// $apprentice->delete(3);

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

<form action="controllers/Apprentice.php" method="POST">
  <div>
    <label for="name">Name:</label>
    <input id="name" name="name" type="text">
  </div>
  <div>
    <label for="lastName">Last name:</label>
    <input id="lastName" name="lastName" type="text">
  </div>
  <div>
    <label for="age">Age:</label>
    <input id="age" name="age" type="text">
  </div>
  <div>
    <label for="gender">Gender:</label>
    <input id="gender" name="gender" type="text">
  </div>
  <div>
    <label for="career">Career:</label>
    <input id="career" name="career" type="text">
  </div>
  <button type="submit">Send</button>
</form>

<?php
require_once("services/Mail.php");

$email = "daniel@gmail.com";
$subject = "Prueba";
$message = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ab fugiat iste, qui quod nobis provident neque. Ducimus culpa hic quidem ad consectetur assumenda repellendus nemo alias optio, expedita cumque.";
$body = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis incidunt nulla exercitationem asperiores, aut debitis, a consequatur nam autem distinctio quos provident dolorem laudantium unde soluta, cum rem perferendis suscipit!
Nostrum alias harum assumenda, dolores dolorum quibusdam iusto enim illum cumque minus vel vitae accusamus ex hic quo officiis dicta minima porro! Laboriosam fugit laborum eos itaque voluptas quidem eius!
Tempora consequatur sunt aliquam tempore minima, amet similique distinctio laborum vero sit commodi maiores, quia molestiae praesentium nobis perspiciatis consectetur vitae! Beatae, alias eos? Reprehenderit delectus maxime natus exercitationem distinctio?
At atque sapiente, adipisci veritatis ex ad numquam impedit quia? Obcaecati eaque exercitationem adipisci aspernatur quas beatae eveniet odio neque illo, tempora animi eius voluptatem officia, blanditiis cupiditate molestiae amet.";

$mail = new Mail($email, $subject, $message, $body);
$mail->send();
