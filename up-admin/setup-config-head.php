<?php
// php pour se connecter la database choisie

if(file_exists("up-config.php")){
    header("location: ../index.php");
    exit();
}
if(isset($_POST["submit"])){
    $database_name = $_POST["database"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $address = $_POST["address"];

   if($database_name && $user && $address){
        $connection = mysqli_connect($address,$user,$password,$database_name);
        if(!$connection){
            die("database connection failed : " . mysqli_connect_error());
        }

        $myfile = fopen("up-config.php", "w") or die("Unable to write");
        fwrite($myfile, "<?php\n");
        $content = '$address = '."'$address';\n";
        fwrite($myfile, $content);
        $content = '$database = '."'$database_name';\n";
        fwrite($myfile, $content);
        $content = '$userDatabase = '."'$user';\n";
        fwrite($myfile, $content);
        $content = '$passwordDatabase = '."'$password';\n";
        fwrite($myfile, $content);
        
        header("location: install.php");
   }
   else{
        die("information insuffisante");
   }
}
?>