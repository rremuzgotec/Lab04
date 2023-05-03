<?php

$usuario = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta2.php</title>
    <link rel="stylesheet" href="pregunta2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-dark h4" style="text-align: center;" >Bienvenido</div>
                </div>
                <div class="card-text">
                <?php
                    echo "<h4 class='text'> ¡Hola " .$usuario. "! </h4>";
                    echo "<h4 class='text'> Tu direccion es: ".$direccion. "</h4>";
                    echo "<h4 class='text'> Tienes: " .$edad. " y tu correo electronico es: " .$correo. "</h4>";
                ?>
                <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>