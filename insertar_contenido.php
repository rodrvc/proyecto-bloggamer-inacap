<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<?php


$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'proyecto_gamer');

$resultado = mysqli_query($conn,"SELECT id, nombre, apellido FROM usuario");

if($_FILES['imagen']['error']){

switch($_FILES['imagen']['error']){

    case 1:  //error exceso de tamaño de archivo en php.ini
        echo "El tamaño del archivo excede lo permitido por el servidor";
    break;

    case 2: //erro tamañao archivo marcado desde formulario
        echo "El tamaño del archivo excede 2 MB";
    break;

    case 3: //Corrupcion de archivo
        echo "El envio de archivo se interrumpio";
    break;
    
    case 4: //No se subio archivo
        echo "No se ha enviado ningun archivo"; 
    break;

}


}else{
    echo "Archivo subido correctamente</br>";
    if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] ==UPLOAD_ERR_OK))){

$destino_de_ruta = "img/";

move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
    
echo "El archivo " . $_FILES['imagen']['name'] . "se ha copiado en el directorio img";

}

}


$titulo=$_POST['campo_titulo'];
$fecha=date('Y-m-d H:i:s');
$comentario=$_POST['area_comentarios'];
$imagen=$_FILES['imagen']['name'];


$miconsulta = "INSERT INTO POST (Titulo, Fecha, Comentario, Imagen)  VALUES ('" . $titulo . "','" . $fecha . "','" . $comentario . "','" . $imagen . "')";


$resultado=mysqli_query($conn, $miconsulta);

/* cerramos conexion*/

mysqli_close($conn);

echo "</br> se ha agregado el comentario con exito. </br></br>";



?>

</body>
</html>