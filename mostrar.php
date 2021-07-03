<?php

include_once('./config/DBconect.php');
$conexion=new Database;
$resultado=$conexion->datosCorredores();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="./index.php">Formulario Ingreso</span></a>
                <a class="nav-link" href="#">Listado</a>
        </div>
    </nav>

    <table class="table">
        <thead>
           <tr>
                <th>id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Categoria</th>
                <th>Marca coche</th>
                <th>Modelo</th>
                <th>Numerocompetidor</th>
           </tr>
        </thead>
        <tbody>
        <?php
        foreach($resultado as $fila){
            echo "<tr>
                <td>".$fila['id']."</td>
                <td>".$fila['nombres']."</td>
                <td>".$fila['apellidos']."</td>
                <td>".$fila['edad']."</td>
                <td>".$fila['categoria']."</td>
                <td>".$fila['marcacoche']."</td>
                <td>".$fila['modelo']."</td>
                <td>".$fila['numerocompetidor']."</td>
            </tr>";
        }
    ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>