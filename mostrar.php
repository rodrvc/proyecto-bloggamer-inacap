<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginas de video juegos</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="css/styleprueba.css" rel="stylesheet" type="text/css" /></head>

</head>

<body>
    <header id=headernintendo>
            <img src="img/logo.png" width="100" height="100">
        <h1 class="titulo">GAMER NEWS</h1>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="trucos.html">Trucos</a></li>
            <li><a href="Nintendo.php">Nintendo</a></li>
            <li><a href="formulario.php">Agregar Contenido</a></li>
        </ul>
    </header>
    <section class="wrapper">
        <h1 id=h1nintendo>Juegos que marcaron la industria Nintendo</h1>

        <section class="main">

            <section class="juegos">
               
                <article id="Zelda">
                 
                <?php

$conexion = mysqli_connect('localhost','root','');
mysqli_select_db($conexion, 'proyecto_gamer');

/* comprobar que la conexion este bien*/

if(!$conexion){

echo "La conexion ha fallado: " . mysqli_error();

exit();


}

$consulta= "SELECT * FROM post ORDER BY fecha DESC";

if($resultado=mysqli_query($conexion, $consulta)){

while($registro=mysqli_fetch_assoc($resultado)){

echo "<h2>" . $registro['Titulo'] . "</h2>";

if($registro['Imagen']!=""){

    echo "<img src='img/" .$registro['Imagen'] . "' width='300px'  />";
    
    
    
    }

echo "<h6>" . $registro['Fecha'] . "</h6>";

echo "<h3> Descripción: </h3> ";

echo "<p>" . $registro['Comentario'] . "</p><br/><br/>";



echo "<hr/>";

}


}

?>
                 
                 
                 </article>
               
            </section>
<div class="aside"> 
            <aside>
                <h2 id="h2Aside"> Navega a travez de la pagina aqui.</h2>
                <ul id=ulNintendo>
                    
                </ul>
                <div id=trucos>
                    <h3 id=h3trucos>Necesitas Trucos? </h3>
                    <a href="trucos.html"> <img id="trucos" src="img/trucos-de-juegos.jpg"></a>
                </div>

                <div id="contenidonuevo">
                    

                </div>

            </aside>
            </div>

        </section>

    </section>


</body>

</html>