<?php 

    include('db.php');

    if(isset($_POST['guardarPost'])){
        $titulo_de_post = $_POST['post']  ;
        $description = $_POST['textArea-description'];

        echo $titulo_de_post;
        echo $description;

        $query = "INSERT INTO post_gamer(id_post , descripcion) VALUES ('$titulo_de_post', '$description')";
        $result = mysqli_query($conn, $query);
      
            echo 'saved';
        
        
    }
?>