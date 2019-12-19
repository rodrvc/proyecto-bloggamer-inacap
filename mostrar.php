<?php include("header.php")?>
    <section class="wrapper">
        

        <section class="main container">
        <h1 class="main-pag-title">Juegos que marcaron la industria Nintendo</h1>
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
?>
<div class="row" >
    
    <?php 
if($resultado=mysqli_query($conexion, $consulta)){

while($registro=mysqli_fetch_assoc($resultado)){?>

<div class="col-sm-6">
    <div class="card" style="width: 18rem;">
    <?php if($registro['Imagen']!="") echo "<img src='img/" .$registro['Imagen'] . "' width='300px'  class='card-img-top' />" ?> 
  
        <div class="card-body">
            <h2 class="card-title">
            <h5> <?php echo  $registro['Titulo']  ?></h5> 
   
            <?php echo "<h6 class='card-text' >" . $registro['Fecha'] . "</h6>"; ?>
            <p class="card-text"><?php echo $registro['Comentario'] ?></p>
    
        </div>
    </div>
</div>

<?php            



    }
}

?>
</div>
                 
                 
                 </article>
               
            </section>
<div class="container"> 
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

    <?php include("footer.php")?>
</body>

</html>