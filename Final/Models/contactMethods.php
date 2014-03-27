	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class ContactMethods
	{
		static public function Get($id = null)
		{
			$sql = "SELECT C.*, U.Username as UsersID_Name, K.Name as Contact_Method_Type
					FROM 2014Spring_ContactMethods C Join 2014Spring_Users U ON C.User_id = U.id Join 2014Spring_Keywords K ON C.ContactMethodType = K.id";
			
			// SELECT A.*, U.Username as UsersID_Name, K.Name as Address_Type
			//		FROM 2014Spring_Addresses A Join 2014Spring_Users U ON A.Users_id = U.id Join 2014Spring_Keywords K ON A.AddressType = K.id;";
					
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
				$sql .= " WHERE C.id = $id ";
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
				$sql = "Update 2014Spring_ContactMethods
							Set ContactMethodType='$row[ContactMethodType]', 
								Value='$row[Value]',
								User_id='$row[User_id]'
							WHERE id = $row[id]";
			}
			else
			{
				$sql = "INSERT INTO 2014Spring_ContactMethods (ContactMethodType, Value, User_id)
					    VALUES ('$row[ContactMethodType]', '$row[Value]','$row[User_id]' ) ";	
				
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
				if(empty($row['User_id'])) $errors['User_id'] = "is required";
				if(!is_numeric($row['User_id'])) $errors['User_id'] = "must be a number";
				
				if(empty($row['ContactMethodType'])) $errors['ContactMethodType'] = "is required";
				if(!is_numeric($row['ContactMethodType'])) $errors['ContactMethodType'] = "must be a number";
				
				if(empty($row['Value'])) $errors['Value'] = "is required";
				
				return count($errors) > 0 ? $errors : false ;
			}
			
		}
	
