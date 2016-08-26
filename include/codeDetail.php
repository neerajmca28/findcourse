 <?php 
     if(isset($_GET['topic']))
     {
     	$topicId = $_GET['topic'];
     	$status = $service->getTopicById($topicId);
     	
     	echo $status[0]['description'];
     }
     else {
     
     ?>
     
     
     
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <?php 
     }
    ?>
