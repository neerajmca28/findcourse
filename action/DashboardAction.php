<?php 
if (isset($_GET['id']))
{
	$courseId=$_GET['id'];
}
	header("Location: ../dashboard/home.php?id=$courseId");
?>