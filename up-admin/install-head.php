<?php
// php pour completer la configuration de la database

if(!file_exists("up-config.php") || !file_exists("temp.php")){
    header("location: ../index.php");
}

include "up-config.php";
include "temp.php";

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

    if($password != $passwordConfirm){
        header("location: install.php?msg=mot de passe non correspondant");
    }
    
    $myfile = fopen("up-config.php", "a") or die("unable to wrtie");
    $content = '$title = ' . "'$title'" . ";" . "\n";
    fwrite($myfile, $content);

    $connection = mysqli_connect($address,$userTemp,$passwordTemp,$database);

    $result = mysqli_query($connection,$query);
}