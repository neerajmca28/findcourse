<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  
  
  <?php 
  
  $uri = $_SERVER['REQUEST_URI'];
  preg_match("/[^\/]+$/", "$uri", $matches);
  $last_word = $matches[0]; // test
  $coursename = explode(".",$last_word);
  $splArr = split ("\/", $uri);
  $type = $splArr[2]; 
  $service = new ContentService();
  $status = $service->getCourseByName($coursename[0]);
  $result = $service->getCourseDetailByCourseId($status[0]['id'],$type);
		foreach ($result as $value)
		{
			$coursename = strtolower($value['coursename']);
			$url = "../".$type."/".$coursename.".php?topic=".$value['id'];
		?>
	<a href="<?php echo $url ?>" id="<?php echo $value['id'] ?>" class="w3-hover-black"><?php echo $value['topicname']; ?></a>
  		<?php 
  }
  		
  	?>
</nav>