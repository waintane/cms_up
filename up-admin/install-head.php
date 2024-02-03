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

    if(!($newPassword == $passwordConfirm)){
        header("location: install.php?msg=mot de passe non correspondant");
    }

    $connection = mysqli_connect($address,$userTemp,$passwordTemp,$database);
    if(!$connection){
        die("unable to connect");
    }
    $query = "CREATE USER '$newUser'@'%'";
    $result = mysqli_query($connection,$query);
    $query = "SET PASSWORD FOR '$newUser'@'%' = PASSWORD('$newPassword')";
    $result = mysqli_query($connection,$query);
    $query = "GRANT ALL PRIVILEGES ON $database.* TO '$newUser'@'%' IDENTIFIED BY '$newPassword'";
    $result = mysqli_query($connection,$query);

    $myfile = fopen("up-config.php", "a") or die("unable to wrtie");
    $content = '$title = '."'$title'".";"."\n";
    fwrite($myfile, $content);
    $content = '$password = '."'$newPassword'".";"."\n";
    fwrite($myfile, $content);
    $content = '$user = '."'$newUser'".";"."\n";

    unlink("temp.php");

    header("location: ./login.php");
}