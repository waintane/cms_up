<?php
// php pour se connecter au dashboard
session_start();

include "db.php";

if(isset($_GET["msg"])){
    $msg = $_GET["msg"];
}else{
    $msg = "";
}
if(isset($_POST["submit"])){
    $password = $_POST["password"];
    $username = $_POST["username"];

    if($password == "" || $username == ""){
        header("location: login.php?msg=Il y a un champ vide");
    }

    $query = "SELECT * FROM up_users WHERE username" . "='$username' LIMIT 1";
    $result = mysqli_query($connection, $query);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $hash = $row["password"];
        $id = $row["id"];
        $role = $row["role"];
        if(password_verify($password, $hash)){
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["name"] = $username;
            $_SESSION["role"] = $role;
            $_SESSION["id"] = $id;
            header("location: index.php");
        }else{
            header("location: login.php?msg=mauvais mot de passe");
        }
    }else{
        die("unable to connect");
    }
}
