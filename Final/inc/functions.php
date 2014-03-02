	<?php
		include_once __DIR__. '/password.php';  // Call password file
		function GetConnection()
		{
			global $password;
			// Create connection
			$conn = mysqli_connect('localhost','n01912690',$password,'n01912690_db');
			echo (mysqli_connect_error($conn));
			return $conn;
			 
		 }
		function fetch_all($sql){
			$conn = GetConnection();
			$results = $conn->query($sql);
			
			//print_r($conn);
			$arr = array();
			
			while ($row = $results->fetch_assoc()) {
				$arr[] = $row;
			}
			
			$conn->close();
			
			return $arr;
		}
