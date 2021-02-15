<?php
require_once "koneksi.php";
$nama_file = $_FILES['file']['name'];
$nama = $_POST["nama"];



if(isset($_POST['submit'])){
   if($nama_file && $nama != ""){
    $dir_upload =dirname (__Dir__)."../image/";
   $nama_file = $_FILES['file']['name'];
   //
   if (is_uploaded_file($_FILES['file']['tmp_name'])) {
   $test = move_uploaded_file($_FILES['file']['tmp_name'], $dir_upload.$nama_file);
   $q = $database_connection->prepare("INSERT INTO `post` (`_image`, `_nama`) VALUES ('$nama_file', '$nama');");
   $q->execute([$nama_file,$nama]);
   header("Location: ../menuu.php");
   if ($test) {
      echo( "File berhasil diupload");
   } else {
  }
 }
  }else{
   echo "<div align='center'>Isi Semua Form !!! 
   <a href='../upload.php'>Back</a></div>";
     
  }
}




?>