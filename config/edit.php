<?php
require_once "koneksi.php";
$id_register = $_POST["id_reg"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];


$q = $database_connection->prepare(
	"UPDATE `user` SET `username` = '$username',`password` = '$password',`email` = '$email' WHERE `user`.`id` =$id_register; 
	");
	$q -> execute([$password]);
header("Location: ../datauser.php");


?>