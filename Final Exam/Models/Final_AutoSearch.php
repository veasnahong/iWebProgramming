<?php
	//include_once __DIR__ . '/../inc/GetConnected.php';	// Connect to Prof. Database
	// include_once __DIR__ . '/../inc/allModels.php';
	include_once __DIR__ . '/../inc/GetConnected.php';
	
	class AutoComplete
	{
		static public function Get($id = null)
		{
			$sql = "SELECT * FROM US_Zip_Codes";
		
			if($id == null)
			{
				return fetch_all($sql);
			}
			else 
				{
				// $sql .= " WHERE U.id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0)
				{
					return $results[0];
				}
				else
				{
					return null;
				}
			}	
		}
	}

		
		
	