<?php
// php pour completer la configuration de la database

if(!file_exists("up-config.php")){
    header("location: ../index.php");
}

include "up-config.php";

if($config){
    header("location: login.php");
}
if(isset($_GET["msg"])){
    $msg = $_GET["msg"];
}else{
    $msg = "";
}
if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $newUser = $_POST["user"];
    $newPassword = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    if(!($newPassword == $passwordConfirm)){
        header("location: install.php?msg=mot de passe non correspondant");
    }else{
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }

    $connection = mysqli_connect($address,$userDatabase,$passwordDatabase,$database);
    if(!$connection){
        die("unable to connect");
    }
    $query = "CREATE TABLE up_users (
        Id int(10) NOT NULL AUTO_INCREMENT,
        Username varchar(35) NOT NULL,
        Password varchar(255) NOT NULL,
        PRIMARY KEY (Id)
        )";
    $result = mysqli_query($connection,$query);
    $query = "INSERT INTO up_users (Username,Password)
        VALUES ('$newUser','$hashedPassword')";
    $result = mysqli_query($connection,$query);

    $myfile = fopen("up-config.php","a") or die("unable to write"); 
    fwrite($myfile, '$config = true;');

    header("location: ./login.php");
}