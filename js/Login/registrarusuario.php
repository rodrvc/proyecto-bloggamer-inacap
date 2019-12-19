<?php



include("con_db.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
        
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $password = trim($_POST['password']);
     
       
        $consulta = "INSERT INTO usuario (nombre, apellido, correo, telefono, password ) 
        VALUES ('$name', '$apellido', '$correo', '$telefono','$password')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
                <h3 class="ok">¡ Te has inscrito conrrectamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡ Ups ha ocurrido un error!</h3>
        <?php
        } 
    }   else {
        ?>
        <h3 class="bad">¡ Por favor complete los campos!</h3>
        <?php
    }
}


?>