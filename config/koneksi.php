<?php
$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "walpaper";


try{
$database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name",
$database_username,$database_password);
$cek = "";
echo $cek;
}catch(PDOException $x){
    die($x->getMessage());

}

?>

