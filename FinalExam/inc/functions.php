	<?php
	
		function GetConnection()
		{
		
			// Create connection
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
		function escape_all($row, $conn){
			$row2 = array();
			foreach ($row as $key => $value) 
			{
				$row2[$key] = $conn->real_escape_string($value);
			}
			return $row2;
		}
