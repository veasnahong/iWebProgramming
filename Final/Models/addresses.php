	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Addresses
	{
		static public function Get($id = null)
		{
			$sql = "SELECT A.*, U.Username as UsersID_Name, K.Name as Address_Type
					FROM 2014Spring_Addresses A Join 2014Spring_Users U ON A.Users_id = U.id Join 2014Spring_Keywords K ON A.AddressType = K.id; ";
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
			
			if (isset($row['id'])) 
			{
				$sql = "INSERT INTO 2014Spring_Addresses
				(Users_id, AddressType, Addresses, City, State, Zip, Country)
				VALUES ('$row[Users_id]', '$row[AddressType]','$row[Addresses]', '$row[City]', '$row[State]', '$row[Zip]','$row[Country]')";
				
				// echo $sql;
				// $sql = "Update 2014Spring_Users
				// Set FirstName='$row[FirstName]', LastName='$row[LastName]',
				// Password='$row[Password]', fbid='$row[fbid]', UserType='$row[UserType]'
				// WHERE id = $row[id]";
			
		
			}
			else
			{
				// $sql = "INSERT INTO 2014Spring_Users
				// (FirstName, LastName, Password, fbid, UserType)
				// VALUES ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[fbid]', '$row[UserType]')";
				// echo $sql;
				
				$sql = "Update 2014Spring_Addresses
				Set Users_id='$row[Users_id]', AddressType='$row[AddressType]', Addresses ='$row[Addresses]',
				City='$row[City]', State='$row[State]', Zip='$row[Zip]', Country='$row[Country]'
				WHERE id = $row[id]";
					
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
			
			}
			
		}
	
