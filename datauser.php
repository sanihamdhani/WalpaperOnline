
<?php
include "config/data_register.php";

session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<html>
<head>
<title>Menu Utama</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <br>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Walpaper Online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="menuu.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="upload.php"><b>Upload</b></a>
            
            </form>
              <a class="dropdown-item" href="config/logout.php"><b>Logout</b></a>
              <div class="dropdown-divider"></div>
            </div>

        </ul>
      </div>
  </nav>
<br><br>

  

<table class="table table-dark table-striped" 
id = "dataregister" class="table table-striped table-bordered" style="width:100%"
>
<thead>
    <tr>
    <th>Username</th>
       <th>Email</th>
       <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
    
    while($row = $q->fetch()):
    $id = $row["id"];
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
    ?>


    <td><?php echo $username;?></td>
  
  <td><?php echo $email;?></td>


  <td>
            <form action="edituser.php" method="POST">
            <input type="hidden" name="id_reg" value="<?php echo $id?>"/>
            <input type="hidden" name="username" value="<?php echo $username?>"/>
            <input type="hidden" name="password" value="<?php echo $password?>"/>
            <input type="hidden" name="email" value="<?php echo $email?>"/>
            <button type="submit" class="btn btn-primary">Edit</button>
            </form>

            
            
        
    </td>
    </tr>
    <?php endwhile;?>
    
</tbody>
</table>
<div class="jumbotron">
<footer>
  <p class="bold" style="text-align: center; font-weight: bold;">
Copyright &copy; by 18111281_SaniHamdhani_TIF RP 18 CNS A_UASWEB1</p>
</footer>


</div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>


</html>

