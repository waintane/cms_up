<?php 

if(file_exists("up-admin/up-config.php")){
    echo "le site";
}else{
    header("location: up-admin/setup-config.php");
    exit();
}



