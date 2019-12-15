<?php 

        function generarKeyRamdom($length = 6) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
                for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
            return $randomString;
        }



    include('db.php');

    if(isset($_POST['guardarPost'])){
        $id_post = generarKeyRamdom();
        $titulo_de_post = $_POST['titulo_post']  ;
        $description = $_POST['textArea-description'];

      
       
        echo $titulo_de_post;
        echo $description;
        
        $query = "INSERT INTO post_gamer(id_post, titulo , descripcion) VALUES ('$id_post', '$titulo_de_post', '$description')";
        $result = mysqli_query($conn, $query); 
            echo 'saved';
    }
?>