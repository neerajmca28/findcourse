<!DOCTYPE html>
<html>
<title>Findcodes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/common.js"></script>
</head>

<?php 
include '../css/internalcss.php';
include '../css/css.php';
?>
<body>
<!-- Navbar -->
<?php


include '../include/header.php';

?>

<!-- Sidenav -->
<?php include '../menu/sidemenu.php'; ?>
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div  id="dataDivId" class="w3-twothird w3-container">
     
    <?php 
    include '../include/codeDetail.php';
    
    ?>    
    
    </div>
    
  </div>

<?php
include '../include/footer.php';
?>    

<!-- END MAIN -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>

