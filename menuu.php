
<?php
include "config/dataupload.php";

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
            <a class="nav-link text-light" href="upload.php">Upload Gambar Anda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="datauser.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
            <?php echo $username;?></a>
            
            </form>
              <a class="dropdown-item" href="config/logout.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
              <b>Logout</b></a>
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
        <th>Image</th>
        <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php
    while($row = $q->fetch()):
    $id = $row["id_gambar"];
    $image = $row["_image"];
    $name = $row["_nama"];
    ?>

    <tr>    
        <td><?php echo "<img src='image/$image' width='100' height='100'/>";?></td>
        <td>
        <form action="editgambar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="hidden" name="image" value="<?php echo $image?>">
            <input type="hidden" name="name" value="<?php echo $name?>">
            
            <button type="submit" class="btn btn-primary">Edit</button><br>
            <br>
            
            
            <a href="<?php echo "image/$image";?>" class="btn btn-primary">Download Walpaper</a>
            </form> 
            <form action="config/hapuspost.php" method="POST">
                 <input type="hidden" name="id_post" value="<?php echo $id?>"/>
                 <button type="submit" class="btn btn-danger">Hapus</button>
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

