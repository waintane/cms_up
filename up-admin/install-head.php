<?php
// php pour completer la configuration de la database

if(!file_exists("up-config.php")){
    header("location: ../index.php");
}

include "up-config.php";
include "db.php";

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
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    }
    $query = "CREATE TABLE up_users (
        id int(10) NOT NULL AUTO_INCREMENT,
        username varchar(35) NOT NULL,
        password varchar(255) NOT NULL,
        PRIMARY KEY (Id)
        )";
    $result = mysqli_query($connection,$query);
    $query = "INSERT INTO up_users (username,password)
        VALUES ('$newUser','$hashedPassword')";
    $result = mysqli_query($connection,$query);

    $myfile = fopen("up-config.php","a") or die("unable to write"); 
    $content = '$config = '."true;\n";
    fwrite($myfile, $content);
    $content = '$title = '."'$title';\n";
    fwrite($myfile, $content);

    header("location: ./login.php");
}