	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class OrderItems
	{
		static public function Get($id = null)
		{
			$sql = "SELECT I.*, O.User_id as Users_ID, U.Username as UserName, P.Name as ProductName
			FROM 2014Spring_Order_Items I Join 2014Spring_Orders O ON O.User_id = I.id Join 2014Spring_Users U ON O.User_id = U.id Join 2014Spring_Products P ON I.Product_id = P.id";
			
			// $sql ="SELECT I.*, O.User_id as Users_ID, P.Name as ProductName
			// FROM 2014Spring_Order_Items I Join 2014Spring_Orders O ON O.User_id = I.id Join 2014Spring_Products P ON I.Product_id = P.id";
			
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
				$sql .= " WHERE I.id = $id ";
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
				$sql = "INSERT INTO 2014Spring_Order_Items
				(Order_id, Product_id)
				VALUES ('$row[Order_id]', '$row[Product_id]')";
				
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
				
				$sql = "Update 2014Spring_Order_Items
				Set Order_id='$row[Order_id]', Product_id='$row[Product_id]'
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
	
