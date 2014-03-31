	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Supliers
	{
		static public function Get($id = null)
		{
			$sql = "SELECT *
					FROM 2014Spring_Supliers";
			
			if($id == null)
			{
				// echo $sql;
				// print_r($sql);
				// Get all records
				return fetch_all($sql);
			}
			else 
			{
				// Get one record
				$sql .= " WHERE id = $id ";
				// echo $sql;
				// print_r($sql);
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
	
	
		static public function Save($row)
		{
			$conn = GetConnection();
			
			if (!empty($row['id'])) 
			{
				$sql = "Update 2014Spring_Supliers
						Set Name='$row[Name]' 
						WHERE id = $row[id]";
			}
			else
			{
				$sql = "INSERT INTO 2014Spring_Supliers (Name)
						VALUES ('$row[Name]') ";	
				
			}
		
	
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
			}
			
			static public function Blank()
			{
			return array( 'id' => null);
			}
			
			static public function Delete($id)
			{
			
			}
			
			static public function Validate($row)
			{
				if(empty($row['Name'])) $errors['Name'] = "is required";				
				return count($errors) > 0 ? $errors : false ;
			}
			
		}
	
