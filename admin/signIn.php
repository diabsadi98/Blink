<?php 
  session_start();
  if( $_SESSION['user'] == 'YES'){
    echo '<script type="text/javascript"> window.open("index.php","_self"); </script>';
    exit;
  }
  else{
    
  }
  ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/logIn.css">
  <link rel="shortcut icon"  type="image/x-icon"  href="../img/image14.png">
</head>

<body>
  <div class="divnav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blink SuperMarket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbraroptions">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="signIn.php">
                Log in
              </a>
            </li>
          </ul>
          <form class="d-flex navform">
          </form>
        </div>
      </div>
    </nav>
  </div>

  <div class="b1">
    <div class="i1">
      <form action="authontication.php" method="post">
      <img src="../img/image12.png" height="150px" width="155px">
      <h2 style="margin-bottom:80px;">Welcome again</h2>
      <input type="email" name="username" class="form-control" required placeholder="E-Mail">
      <input type="password" name="password" class="form-control" required placeholder="Password">
      <button style="margin-top: 20px" class="btn btn-lg btn-form" type="submit">Log-in</button>
      </form>
      <div class="txt1">
        <h6>Don't have an account?<a href="register.php"><span style="color:#3396FF; cursor:pointer;"><u>Register</u></span></a> </h6>
      </div>
    </div>
  </div>

