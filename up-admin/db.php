<?php
if(file_exists("up-config.php")){
    include "up-config.php";

    $connection = mysqli_connect($address,$userDatabase,$passwordDatabase,$database); 
    if(!$connection){
        die("unable to connect");
    }
}