<?php
require_once "koneksi.php";
$id_post= $_POST["id_post"];
echo $id_post;

$q = $database_connection->prepare("DELETE FROM `post` WHERE `post`.`id_gambar` = ?");
$q->execute([$id_post]);
header("Location: ../menuu.php");
?>
