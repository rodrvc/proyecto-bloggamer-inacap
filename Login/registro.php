<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registro</title>
</head>
<body>

<?php

include("registrarusuario.php")

?>

<header>
        <img src="img/logo.png" width="100" height="100">
        <h1 class="titulo">GAMER NEW CHECK </h1>
        <ul>
            <p><a href="index.php"> Registrar</a></p>
            <p><a href="login.php"> Login</a></p>
            <p><a href="mostrar.php"> Mostrar</a></p>
           
      
        </ul>
</header>

<?php include("../header.php")?>

<div>
    <form  method="post">
    <h1>Registro de Usuarios</h1>
    <input type="text" name="name" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="email" name="correo" placeholder="Email">
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="register">
    </form>
</div>    
</body>




<form>
<h2>Datos de Usuarios</h2>
<hr>
<?php

include("mostrar.php")

?>
</form>


</html>