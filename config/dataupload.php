<?php
require_once "koneksi.php";

try{
$sql = 'SELECT * FROM `post`';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
die("Tidak bisa Membuka Datbase $database_name:" . $e->getMessage());

}
?>