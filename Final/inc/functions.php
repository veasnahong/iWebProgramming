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
		$conn = GetConnection();
		print_r($conn);
		print_r($result);
		echo 'Test';
