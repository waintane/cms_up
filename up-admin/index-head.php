<?php
session_start();

include "db.php";

if(!$_SESSION["loggedin"]){
    header('location: login.php');
}
echo "Bienvenue ".$_SESSION["name"];