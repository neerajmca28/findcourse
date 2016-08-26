<?php

class DbHandler
{
	
	public function conn()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "findcode";
		$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return  $conn;
	}	
	
	public function queryExecute($query)
	{
		$con=new DbHandler();
		$conn=$con->conn();	
		$sql = $query;
		//$result = $conn->query($sql);
		
		$result = mysqli_query($conn, $sql);
		
		$result_array = array();
		$index = 0;
		while($row = mysqli_fetch_assoc($result))
		{
			$result_array[$index] = $row;
			$index++;
		}
		
		mysqli_close($conn);
		return $result_array;
	}
	
	function numRows($query) {
		
		$con=new DbHandler();
		$conn=$con->conn();
		if($result=mysqli_query($conn,$query))
		{
			$rowcount = mysqli_num_rows($result);
			mysqli_close($conn);
			return $rowcount;
		}
	}
	
	
	
	public function runQuery($query)
	{
		$con=new DbHandler();
		$conn=$con->conn();
		$sql = $query;
		$result = $conn->query($sql);
		mysqli_close($conn);
		if($result == 1)
			return "success";
		else
			return "error";
	}
}
?>