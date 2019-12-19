<?php

include("db.php");

if (isset($_POST['envios_inginfrom'])) {
    $correoUsuario = $_POST['nombreUsuario'];
    $contra = $_POST['contraseña'];

    echo "SUSSEEEESST" ;  
     echo $contra ;
      echo $correoUsuario; 

 

    
    $consulta = "SELECT * FROM usuario WHERE correo = '$correoUsuario' and password = '$contra'";
    



    $resultado = mysqli_query($conn,$consulta); 

    if (mysqli_num_rows($resultado) == 1) {

       

       $row = mysqli_fetch_array($resultado);
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $correo = $row['correo'];
       $telefono = $row['telefono'];
       $password = $row['password'];
    }

    session_start();

    $_SESSION['NOMBRE_USUARIO'] = $nombre;
    $_SESSION['logeado'] = true; 

    header("Location:index.php");

    
    



    

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
