<?php
  require_once 'vendor/autoload.php';
 
  use Illuminate\Database\Capsule\Manager as Capsule;
  use App\Models\Hijo;

  $capsule = new Capsule;
  
  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => '127.0.0.1:3306',
      'database'  => 'ejemplo1',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

  // Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();

  // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();

  if(!empty($_POST)){
    $job = new Hijo();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Experiencia Laboral</h1>
    <form action = "formulario1.php" method="post" >
      <label for="">Title: </label>
      <input type="text" name="title"><br>
      <label for="">Descripcion:</label>
      <input type="text" name="description"><br>
      <button type="submit">Enviar</button>
    </form>
</body>
</html>