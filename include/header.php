<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="http://localhost/findcode">
        <img src="../image/logo.png" >
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/findcode">Home</a></li>
        <li>

<a href="#" id="menu1" data-toggle="dropdown">Tutorial Stuff</a>

    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
     
     <?php 
  include '../services/ContentService.php';
  $i = 0;
  $service = new ContentService();
  $result = $service->getAllCourse();
  foreach ($result as $value)
  {
  	$i++;
  	$coursename = strtolower($value['coursename']);
  	$url = "../tutorial/".$coursename.".php?id=".$value['id'];
  	?>
 <li role="presentation">
	<a role="menuitem" tabindex="-1" id="<?php echo $value['id'] ?>" href="<?php echo $url; ?>"><?php echo $value['coursename'];?></a>
</li>
 
  <?php 
  }
  ?>
      </ul>
        </li>
        <li>
        <a href="#" id="menu11" data-toggle="dropdown">Code Stuff</a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <?php 
	      foreach ($result as $value)
	  	  {
	  			$i++;
	  			$coursename = strtolower($value['coursename']);
	  			$codeURL = "../code/".$coursename.".php?id=".$value['id'];
	  	?>
            <li role="presentation">
		    	 <a role="menuitem" tabindex="-1" id="<?php echo $value['id'] ?>" href="<?php echo $codeURL; ?>"><?php echo $value['coursename'];?></a>
		    </li>
		      
		      <?php 
  	  			}
		      ?>
    	</ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>