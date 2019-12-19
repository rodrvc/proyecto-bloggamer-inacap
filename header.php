<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginas de video juegos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  
    <link rel="icon" type="image/png" sizes="192x192" href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scrypt.js" ></script>


    <!-- PHP INICIO DE SESSION!!  -->
    <?php session_start();
      //error_reporting(0);
    ?>
</head>

<body>

    <?php
    include("db.php");
    ?>
    <header >
         <div class="log">
            <?php 
            $sessionActiva = $_SESSION['NOMBRE_USUARIO'];

            if($sessionActiva != null ){
              ?><span class="badge badge-danger">Session: <?php echo $_SESSION['NOMBRE_USUARIO']?>  </span>
              <a class="btn" id="log" href="cerrarSesion.php">Cerrar Sesion</a>

            <?php }  else { ?>
              <button type="button" class="btn btn-danger" data-toggle="modal" 
              data-target="#exampleModal" data-whatever="@fat">Singin</button>
              <a class="btn" id="log" href="loginprincipal.php">Sing up</a>
            <?php }?>
        </div>
        <div class="header"> 
        <img src="img/logo.png" width="100" height="100">
        <h1 class="titulo">GAMER NEW CHECK </h1>
        <ul>
       
            <li class="linav"><a href="index.php">Inicio</a></li>
            <li class="linav"><a href="trucos.html">Trucos</a></li>
            <li class="linav"><a href="Nintendo.html">Nintendo</a></li>
           
 
        </ul>
        </div>
        <?php include("singin.php") ?>
    
    


    
    </header>


   
  
</div>