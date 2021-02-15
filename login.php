<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <title>Login</title>

  <style>
    .row {
      background: white;
      border-radius: 30px;
    }

    img {
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;

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
</head>


<body>
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
            <a class="nav-link text-light" href="index.php">Home</a>
          </li>

        
        </ul>
      </div>
  </nav>

</body>
<div class="jumbotron">


  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="gambar/login.png" class="img-fluid" alt="">

        </div>
        <div class="col-lg-6 px-5 pt-5">
          <h4>Login</h4>

          <form action="config/proseslogin.php" method="POST">
            <div class="form-row">
              <div class="col-lg-7">
                <input type="text" name="username" placeholder="username" class="form-control m-3 p-4">

              </div>

            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" name="password" placeholder="password" class="form-control m-3 p-4">

              </div>

            </div>
            
            <input value="Login" type="submit" class="btn btn-lg btn-dark"> 
            <input value="Batal" type="reset" class="btn btn-lg btn-dark"></td></tr><br>
            <td rowspan="2" align="center">Belum Punya Akun ? <a href="register.php"><b>Register</b></a></td>
            </div>
          </form>

        </div>

      </div>

    </div>

  </section>

</div>
<footer>
    <p class="bold" style="text-align: center; font-weight: bold;">
      Copyright &copy; by 18111281_SaniHamdhani_TIF RP 18 CNS A_UASWEB1</p>
  </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>