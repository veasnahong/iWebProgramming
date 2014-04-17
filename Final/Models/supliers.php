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
				return fetch_all($sql);
			}
			else 
			{
				// Get one record
				$sql .= " WHERE id = $id ";
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
	
		static public function Save(&$row)
		{
			$conn = GetConnection();
			$row2 = escape_all($row, $conn);		//Add new line
			
			if (!empty($row['id'])) 
			{
				$sql = "Update 2014Spring_Supliers
						Set Name='$row2[Name]' 
						WHERE id = $row2[id]";
			}
			else
			{
				$sql = "INSERT INTO 2014Spring_Supliers (Name)
						VALUES ('$row2[Name]') ";	
				
			}
				//echo $sql;
				$results = $conn->query($sql);
				$error = $conn->error;
				
				if(!$error && empty($row['id']))
				{
					$row['id'] = $conn->insert_id;
				}
				
				$conn->close();
				
				return $error ? array ('sql error' => $error) : false;
			}
			
			static public function Blank()
			{
				return array( 'id' => null);
			}
			
			static public function Delete($id)
			{
				$conn = GetConnection();
				$sql = "DELETE FROM 2014Spring_Supliers WHERE id = $id";
				//echo $sql;
				$results = $conn->query($sql);
				$error = $conn->error;
				$conn->close();
				
				return $error ? array ('sql error' => $error) : false;
			}
			static public function Validate($row)
			{
				if(empty($row['Name'])) $errors['Name'] = "is required";				
				return count($errors) > 0 ? $errors : false ;
			}
			
		}
	
