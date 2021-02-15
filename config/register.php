<?php
require_once "koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];





$q = $database_connection->prepare("INSERT INTO `user` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email');");
$q->execute([$username,$password, $email]);
header("Location: ../login.php");
?>