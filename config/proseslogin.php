<?php
   session_start();
   require_once ("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $q = $database_connection->prepare("SELECT * FROM user WHERE username = ?");
   $q->execute(array($username));
   $hasil = $q->fetch();
   if($q->rowCount() == 0) {
    echo "<script>alert('Username Belum Terdaftar!');history.go(-1);</script>";
   } else {
     if($password <> $hasil['password']) {
      echo "<script>alert('Password Salah!');history.go(-1);</script>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:../menuu.php');
     }
   }
?>