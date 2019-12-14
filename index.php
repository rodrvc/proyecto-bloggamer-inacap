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

</head>

<body>

    <?php
    include("db.php");
    ?>
    <header>
        <img src="img/logo.png" width="100" height="100">
        <h1 class="titulo">GAMER NEW CHECK </h1>
        <ul>
            <li class="linav"><a href="index.html">Inicio</a></li>
            <li class="linav"><a href="trucos.html">Trucos</a></li>
            <li class="linav"><a href="Nintendo.html">Nintendo</a></li>
        </ul>
    </header>
    <section class="main-container">
        <div class="section">
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
                <h2>Esto es una post </h2>
                <p class="article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellat sequi, nisi
                    ipsum
                    perferendis iusto?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nobis aperiam pariatur dolore
                    voluptatibus iusto consequatur quam tempora labore expedita officia placeat ut, assumenda, est
                    incidunt quo consequuntur, architecto ipsam!

                </p>
            </div>

            <hr align="center">
            <div class="container">
                <h2>Esto es una post </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellat sequi, nisi ipsum
                    perferendis iusto?
                    Delectus, fugiat maxime. Cum quae adipisci non quia dignissimos excepturi, sed ratione natus
                    repudiandae earum.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum animi quo enim libero non
                    perspiciatis unde dolor quia. Maxime obcaecati soluta rem ex a alias quis id ab quisquam temporibus!
                </p>
            </div>
        </div>

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
                            <p class="aside-text">Lorem ipsum dolor sit11111111111 </p>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    <div class="container">
        <div>
        <h1>Agregar post</h1>
        </div>
    <form action="db.php" method="POST">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
    $query = "SELECT * FROM post_gamer";
   $result_post = mysqli_query($conn, $query);

   while($row = mysqli_fetch_array($result_post)){ ?>
   <p><?php echo $row['id_post'] ?></p>

<?php }?>







    <footer>
        <p> &copy;Alejantroll Rvc Systems1111</p>
    </footer>
</body>

</html>