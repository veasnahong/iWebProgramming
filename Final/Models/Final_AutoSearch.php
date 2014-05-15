<?php
	// include_once __DIR__ . '/../inc/GetConnected.php';	// Connect to Prof. Database
	include_once __DIR__ . '/../inc/allModels.php';
	
	class Final_AutoSearch
	{
			static public function Get($id = null)
			{
				$sql = "SELECT *
				FROM US_Zip_Codes";
	
				if($id == null)
				{
					// Get all records
					return fetch_all($sql);
				}
				else 
				{
	
				}
				{
				// Get one record
				$sql .= " WHERE P.id = $id ";
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

		

		
		
	