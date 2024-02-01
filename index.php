<?php 

if(file_exists("up-admin/up-config.php")){
    echo "it exist";
}else{
    header("location: up-admin/setup-config.php");
    exit();
}



