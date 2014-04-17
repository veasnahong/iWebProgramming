	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class OrderItems
	{
		static public function Get($id = null)
		{
			$sql = "SELECT I.*, O.User_id as Users_ID, U.Username as UserName, P.Name as ProductName
			FROM 2014Spring_Order_Items I Join 2014Spring_Orders O ON O.User_id = I.id Join 2014Spring_Users U ON O.User_id = U.id Join 2014Spring_Products P ON I.Product_id = P.id";
				
			if($id == null)
			{

				return fetch_all($sql);
			}
			else 
			{
				// Get one record
				$sql .= " WHERE I.id = $id ";
				
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
				$sql = "Update 2014Spring_Order_Items
							Set Order_id='$row2[Order_id]', 
								Product_id='$row2[Product_id]'
							WHERE id = $row2[id]";
			}
			else
			{
				$sql = "INSERT INTO 2014Spring_Order_Items (Order_id, Product_id)
					VALUES ('$row2[Order_id]', '$row2[Product_id]') ";	
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
				$sql = "DELETE FROM 2014Spring_Order_Items WHERE id = $id";
				//echo $sql;
				$results = $conn->query($sql);
				$error = $conn->error;
				$conn->close();
				
				return $error ? array ('sql error' => $error) : false;
			}
			static public function Validate($row)
			{
				if(empty($row['Order_id'])) $errors['Order_id'] = "is required";
				if(!is_numeric($row['Order_id'])) $errors['Order_id'] = "must be a number";
				
				if(empty($row['Product_id'])) $errors['Product_id'] = "is required";
				if(!is_numeric($row['Product_id'])) $errors['Product_id'] = "must be a number";
				
				return count($errors) > 0 ? $errors : false ;
			}
			
		}
	
