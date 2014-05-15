	<?php

		function GetConnection()
		{
			// Create connection to Prof. plotkinm
			$conn = mysqli_connect('localhost', 'plotkinm', 'FaceBooK', 'plotkinm_db');
			
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
		
