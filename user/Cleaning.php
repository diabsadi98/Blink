<?php
    session_start();
    if($_SESSION['user'] == 'YES'){
        $name_user = $_SESSION["name"];
    }
    else {
        echo '<script type="text/javascript"> window.open("signIn.php","_self"); </script>';
        exit;
    }
    ?>
<!DOCTYPE html>
<html>

<head>
  <title>Cleaning</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/cleaning.css">
  <link rel="shortcut icon" type="image/x-icon" href="../img/image14.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
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
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Check-Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <?php echo ucfirst(explode(".",$name_user)[0]); ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                Log out
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
  <div class="b1">
    <div class="txt1">
      <span style="color:black;">
        <h2><b>High Quality Essentials</b></h2>
        <br>
        <h3>shop the highest quality products with a low price</h3>
      </span>
    </div>
    <div class="img1">
      <img src="../img/Cleaning/back.png" height="270px" class="first__image">
    </div>
  </div>

  <!-- start the shwo of products  -->

    <!-- start offers -->

    <!-- <div class="offers">
      <img src="./img/essentials/image1.png" alt="">
      <p>Special Offers</p>
    </div> -->




    <!-- end offers -->

<div class="products">

  <div class="product-info">
    <p>Ajax</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image1.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.50 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c1' name='item'>Add to Card</button></form>
    </div>
  </div>

  <div class="product-info">
    <p>Eazy</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image2.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>1.29 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c2' name='item'>Add to Card</button></form>
    </div>
  </div>
  <div class="product-info">
    <p>Windex</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image3.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.95 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c3' name='item'>Add to Card</button></form>
    </div>
  </div>

  <div class="product-info">
    <p>Emlak</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image4.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>1.59 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c4' name='item'>Add to Card</button></form>
   
    </div>
  </div>

  <div class="product-info">
    <p>Detole</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image5.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>2.25 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c5' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">
    <p>Emlak 2L</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image6.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>4.79 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c6' name='item'>Add to Card</button></form>
   
    </div>
  </div>

  <div class="product-info">
    <p>Emlak floor
    </p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image7.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.00 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c7' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">

    <p>Hypex</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image8.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>2.49 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c8' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">

    <p>Scrapers</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image9.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.70 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c9' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">
    <p>broom 
    </p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image10.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.79 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c10' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">
    <p>Mr Muscle</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image11.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>2.10 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c11' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">
    <p>Fairy washer </p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image12.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>4.49 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c12' name='item'>Add to Card</button></form>
   
    </div>
  </div>
  <div class="product-info">
    <p>Fairy Gel</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/Cleaning/image13.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.99 </span>JOD 
      </p>
      <form action="addItem.php" method="get">
      <button value='c13' name='item'>Add to Card</button></form>
   
    </div>
  </div>
</div>

<footer>
  <p>Copyright &copy; Blink System's Team</p>
</footer>
  
