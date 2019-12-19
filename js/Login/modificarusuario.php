<?php

include("con_db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM usuario WHERE id = $id";
    $resultado = mysqli_query($conex,$consulta); 

    if (mysqli_num_rows($resultado) == 1) {
       $row = mysqli_fetch_array($resultado);
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $correo = $row['correo'];
       $telefono = $row['telefono'];
       $password = $row['password'];

    }

    if (isset($_POST['update'])) {
        $id =       $_GET['id'];
        $nombre =   $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];
 
        $query = "UPDATE usuario set nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', password='$password' WHERE id = $id";
        mysqli_query($conex,$query); 

        header("Location: index.php");
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Modificar Usuario</title>
</head>
<body>


<form action="modificarusuario.php?id=<?php echo $_GET['id'] ?>" method="POST">
    <h1>Modificar Datos de Usuario</h1>
    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
    <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $apellido ?>">
    <input type="email" name="correo" placeholder="Correo" value="<?php echo $correo ?>">
    <input type="text" name="telefono" placeholder="Telefono" value="<?php echo $telefono ?>">
    <input type="text" name="password" placeholder="Password" value="<?php echo $password ?>">
    <input type="submit" name="update">

</form>

</body>
</html>