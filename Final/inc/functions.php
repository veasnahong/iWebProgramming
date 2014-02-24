	<?php
		include_once 'password.php';  // Call password file
		function GetConnection()
		{
			global $password;
			// Create connection
			$conn=mysqli_connect('localhost','n01912690',$password,'n01912690_db' );
			return $conn;
			
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
		 }
		$conn =GetConnection();
		print_r($Conn);
		echo 'Test';
