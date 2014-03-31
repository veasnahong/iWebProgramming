	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Addresses
	{
		static public function Get($id = null)
		{
			$sql = "SELECT A.*, U.Username as UsersID_Name, K.Name as Address_Type
<<<<<<< HEAD
					FROM 2014Spring_Addresses A Join 2014Spring_Users U ON A.Users_id = U.id Join 2014Spring_Keywords K ON A.AddressType = K.id; ";
=======
					FROM 2014Spring_Addresses A Join 2014Spring_Users U ON A.Users_id = U.id Join 2014Spring_Keywords K ON A.AddressType = K.id";
>>>>>>> b14a716ab9c2c548d15fb492bdb9ff1496310377
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
				$sql .= " WHERE A.id = $id ";
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
				$sql = "Update 2014Spring_Addresses
							Set Users_id='$row[Users_id]', 
								AddressType='$row[AddressType]',
								Addresses='$row[Addresses]',
								City='$row[City]', 
								State='$row[State]', 
								Zip='$row[Zip]',
								Country='$row[Country]'
							WHERE id = $row[id]";
			}
			else
			{
				$sql = "INSERT INTO 2014Spring_Addresses (Users_id, AddressType, Addresses, City, State, Zip, Country)
					VALUES ('$row[Users_id]', '$row[AddressType]', '$row[Addresses]', '$row[City]', '$row[State]', '$row[Zip]', '$row[Country]' ) ";	
				
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
				if(empty($row['Users_id'])) $errors['Users_id'] = "is required";
				if(!is_numeric($row['Users_id'])) $errors['Users_id'] = "must be a number";
				
				if(empty($row['AddressType'])) $errors['AddressType'] = "is required";
				if(!is_numeric($row['AddressType'])) $errors['AddressType'] = "must be a number";
				
				if(empty($row['Addresses'])) $errors['Addresses'] = "is required";
				if(empty($row['City'])) $errors['City'] = "is required";
				if(empty($row['State'])) $errors['State'] = "is required";
				if(empty($row['Zip'])) $errors['Zip'] = "is required";
				if(empty($row['Country'])) $errors['Country'] = "is required";
				
				return count($errors) > 0 ? $errors : false ;
			}
			
		}
	
