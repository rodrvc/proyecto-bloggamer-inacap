<?php 

        include("db.php");

       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $query = "SELECT *  FROM post_gamer where id_post= $id"; 
           $result = mysqli_query($conn, $query);

           if(mysqli_num_rows($result)== 1){
               $row = mysqli_fetch_array($result);
               $title = $row['titulo'];
               $descripcion = $row['descripcion'];
           }
       }

       if(isset($_POST['editpost'])){
           
           $id = $_GET['id'];

           $title = $_POST['titulo_post'];
           $descripcion = $_POST['textArea-description'];

            $query = "UPDATE post_gamer set titulo = '$title' , descripcion = '$descripcion' where id_post = $id";

           mysqli_query($conn, $query);
           header("Location: index.php");
           
           
       }
?>
<?php 
    include("header.php");
?>
    <div class="container">
    <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
  
        <div class="form-group">
            <label for="post">Post titulo</label>
            <input  name="titulo_post" class="form-control" id="post" value="<?php echo $title;?>">
            <small id="emailHelp" class="form-text text-muted">Ingresa el encabezado de tu post</small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenido</label>
            <textarea class="form-control" id="textArea-description" rows="3" name="textArea-description" ><?php echo $descripcion; ?></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" >
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
             <button type="submit" class="btn btn-primary" name="editpost">Submit</button>
        </form>

       <div>

<?php 
    include("footer.php");
?>





