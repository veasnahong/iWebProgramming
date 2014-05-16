	<?php
		include_once __DIR__ . '/../inc/functions.php';
		
		class AutoSearch 
		{
	
			public static function Search($query) 
			{
				$sql = "SELECT * FROM US_Zip_Codes WHERE city LIKE '%$query%' or state LIKE '%$query%' or zip LIKE '%$query%' Limit 10 ";
				//print_r($sql); 
				return fetch_all($sql);
			}
		}
		