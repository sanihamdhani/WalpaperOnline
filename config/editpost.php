<?php
require_once "koneksi.php";
$nama_file = $_FILES['file']['name'];
$nama = $_POST["nama"];
$id = $_POST["id"];



if(isset($_POST['submit'])){
   if($nama_file && $nama != ""){
    $dir_upload =dirname (__Dir__)."../image/";
   $nama_file = $_FILES['file']['name'];
   //
   if (is_uploaded_file($_FILES['file']['tmp_name'])) {
   $cek = move_uploaded_file($_FILES['file']['tmp_name'], $dir_upload.$nama_file);
   $q = $database_connection->prepare("UPDATE `post` SET _image = '$nama_file', `_nama` = '$nama' WHERE `post`.`id_gambar` =$id; 
	");
   $q->execute([$nama_file,$nama]);
   header("Location: ../menuu.php");
   if ($cek) {
     
     
      echo( "File berhasil diupload");
 
   } else {
  
      
  }
 }
  }else{
     echo "Tidak di isi";
  }
}




?>