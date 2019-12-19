    <?php include("header.php");?>
    
    <section class="main-container">
        <div class="section col-8" >
            <div class="container container-icon">
                <h1 class="main-pag-title ">Noticias del mundo Gamer</h1>
                <p class="principal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam exercitationem
                    dolore quibusdam,
                    id sapiente saepe autem at quae adipisci tempora maiores inventore voluptatibus laborum suscipit
                    rem. Nobis, ullam! Necessitatibus, sint!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam exercitationem dolore quibusdam,
                    id sapiente saepe autem at quae adipisci tempora maiores inventore voluptatibus laborum suscipit
                    rem. Nobis, ullam! Necessitatibus, sint!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam exercitationem dolore quibusdam,
                    id sapiente saepe autem at quae adipisci tempora maiores inventore voluptatibus laborum suscipit
                    rem. Nobis, ullam! Necessitatibus, sint!</p>
                <h2>Tus mejores juegos Semanales!</h2>
                <img class="icons i1 joystick" src="img/game-console.svg" alt="">
                <img class="icons i3 joystick" src="img/game-controller.png" alt="">
                <img class="icons i2 joystick" src="img/gamepad.png" alt="">
            </div>

            <div class="container"> 
            <?php
                $query = "SELECT * FROM post_gamer";
                $result_post = mysqli_query($conn, $query);
                
                while($row = mysqli_fetch_array($result_post)){ ?>
                  <!-- Se agrega Post --> 
                        <div class="container">
                         <h2 ><?php echo $row['titulo'] ?></h2>
                         <p class="article"><?php echo $row['descripcion'] ?></p>
                         <div>   
                            <a href="editar.php?id=<?php echo $row['id_post']?>" class="btn btn-primary btn active" role="button" aria-pressed="true">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row['id_post']?>" class="btn btn-danger btn  active" role="button" aria-pressed="true">Eliminar</a>
                        </div>
                        </div>
                         <hr align="center">    
                <?php }?>
               
                <div>
              
        
        <!-- Aside para depues 
        <div class="aside">
            <h4>Articulos Recomendados</h4>
            <div class="container-aside">
                <div class="card">
                    <div class="body-card">
                        <h5>Los 50 Juegos de la aaaaa Historia</h5>
                        <div>
                            <img src="img/videojuegos.jpg" class="imagen" alt="videojuegos">
                        </div>
                        <div>
                            <p class="aside-text">Lorem ipsum dolor sit, </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body-card">
                        <h5>Los 50 Juegos de la aaaaa Historia</h5>
                        <div>
                            <img src="img/videojuegos.jpg" class="imagen" alt="videojuegos">
                        </div>
                        <div>
                            <p class="aside-text">Lorem ipsum dolor sit, </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body-card">
                        <h5>Los 50 Juegos de la aaaaa Historia</h5>
                        <div>
                            <img src="img/videojuegos.jpg" class="imagen" alt="videojuegos">
                        </div>
                        <div>
                            <p class="aside-text">Lorem ipsum dolor sit, </p>
                        </div>
                    </div>
                </div> 
                -->


            </div>
    </section>
    <div class="container">
        <div>
        <h1>Agregar post</h1>
        </div>
<form action="agregar.php" method="POST">
  
  <div class="form-group">
    <label for="post">Post titulo</label>
    <input type="text" name="titulo_post" class="form-control" id="post">
    <small id="emailHelp" class="form-text text-muted">Ingresa el encabezado de tu post</small>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenido</label>
    <textarea class="form-control" id="textArea-description" rows="3" name="textArea-description"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="guardarPost">Submit</button>
</form>
</div>








   <?php include("footer.php");?>