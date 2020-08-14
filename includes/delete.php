<?php

     $id = $_GET['id'];
     
     require_once "photodb.php";

     $sql = "DELETE FROM images WHERE id = $id";

     $result = mysqli_query($conn, $sql);

     if($result){
        header("location: ../home.php");
     } else {
        echo "not deleted";
     }

