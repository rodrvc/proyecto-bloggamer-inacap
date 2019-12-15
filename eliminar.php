<?php 

    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id']  ;
      

        

        $query = "DELETE FROM post_gamer WHERE id_post = $id";

        $result = mysqli_query($conn, $query); 

        if(!result) {
            die("query falied");
        }

        header("Location: index.php");

        
    }
?>