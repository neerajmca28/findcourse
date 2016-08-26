<!DOCTYPE html>
<html lang="en">
<head>
  <title>findcodes.net</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php 
include '../css/css.php';
?>

</head>
<body>

<!-- header include here -->

<?php 

include '../include/header.php';
?>

<!-- header include end here -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../image/slide-2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>
      </div>

      <div class="item">
        <img src="../image/slide-1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
     <img src="../image/php-logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      
    </div>
    <div class="col-sm-4">
      <img src="../image/java-logo.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
     
    </div>
    <div class="col-sm-4">
     <img src="../image/python-logo.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
     
    </div>
    
  </div>
</div><br>

<footer class="navbar-inverse text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

