<?php
$id_register = $_POST["id_reg"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
?>

<html lang="en">

<head>
  <title>Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .row {
      background: white;
      border-radius: 30px;
    }

    img {
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
      height: auto;

    }

    .btn1 {
      border: none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: green;
      color: black;
      border-radius: 4px;
      font-weight: bold;

    }
  </style>


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
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="upload.php">Upload Gambar</a>
          </li>

          
        </ul>
      </div>
  </nav>


<body>
  <div class="jumbotron">


    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <img src="gambar/regis.png" class="img-fluid" alt="">

          </div>
          <div class="col-lg-7 px-5 pt-3">
            <h3>Edit</h3>
            <form action="config/edit.php" method="POST">
              <div class="form-group">
                <div class="col-lg-7">
                  <label for="text">Username:</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
					
                </div>
                
              </div>
              <div class="form-group">
                <div class="col-lg-7">
                  <label for="text">Password:</label>
                  <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
					
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-7">
                  <label for="text">Email:</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
					</div>
</div>


              
<input type="hidden" name="id_reg" value="<?php echo $id_register?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>

                


          

    </section>
  </div>

  <footer>
    <p class="bold" style="text-align: center; font-weight: bold;">
      Copyright &copy; by 18111281_SaniHamdhani_TIF RP 18 CNS A_UASWEB1</p>
  </footer>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

</html>