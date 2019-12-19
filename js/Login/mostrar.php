<?php

$inc = include("con_db.php");

if ($inc) {
    $consulta = "SELECT * FROM usuario";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
        while($row = $resultado -> fetch_array()){
            
            $id = $row['ID'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $correo = $row['correo'];
            $telefono = $row['telefono'];
            $password = $row['password'];
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Modificar Datos</title>
</head>


<body>


</br> 

<div>
                
             
    <div> 
        <p>
            <b>ID: </b> <?php echo $id ?> <br>
            <b>NOMBRE: </b> <?php echo $nombre ?> <br>
            <b>APELLIDO: </b> <?php echo $apellido ?> <br>
            <b>EMAIL: </b> <?php echo $correo ?> <br>
            <b>Telefono: </b> <?php echo $telefono ?> <br>
            <b>PASSWORD: </b> <?php echo $password ?> <br>
            
<a class="linkedit" href="modificarusuario.php?id=<?php echo $row['ID']; ?>">Editar</a>
<a class="linkelim" href="eliminarusuario.php?id=<?php echo $row['ID']; ?>">Eliminar</a>
        </p>
    </div>
</div>



</body>
</html>


            <?php

        }
    }

}


?>