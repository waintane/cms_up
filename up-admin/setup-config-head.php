<?php

if(file_exists("up-config.php")){
    header("location: ../index.php");
    exit();
}
if(isset($_POST["submit"])){
    $database_nom = $_POST["database"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $address = $_POST["address"];

   if($database_nom && $user && $password && $address){
        $connection = mysqli_connect($address,"root","","");
        if(!$connection){
            die("database connection failed : " . mysqli_connect_error());
        }
        $query = "CREATE DATABASE " . $database_nom;
        if(mysqli_query($connection, $query)){
            echo "la base de données a été créée avec succès";
        }else{
            die("Il y a eu une erreur dans la création de la base de données: " . mysqli_error());
        }
   }
   else{
        die("information insuffisante");
   }
}
?>