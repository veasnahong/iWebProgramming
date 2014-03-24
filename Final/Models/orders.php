	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Orders
	{
		static public function Get($id = null)
		{
			$sql = "SELECT O.*, U.Username as UsersID_Name, A.Addresses as Address_ID
					FROM 2014Spring_Orders O Join 2014Spring_Users U ON O.User_id = U.id join 2014Spring_Addresses A ON O.Address_id = A.id";
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
				$sql .= " WHERE O.id = $id ";
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
				$sql = "INSERT INTO 2014Spring_Orders
				(User_id, Address_id)
				VALUES ('$row[User_id]', '$row[Address_id]')";
				
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
				Set User_id='$row[User_id]', Address_id='$row[Address_id]'
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
	
