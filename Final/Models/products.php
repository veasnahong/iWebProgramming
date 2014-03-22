	<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Products
	{
		static public function Get($id = null)
		{
			$sql = "SELECT P.*, K.Name as Products_Catergories
			FROM 2014Spring_Products P Join 2014Spring_Keywords K ON P.Catergory_Keyword_id= K.id";
			
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
	
		static public function Save($row)
		{
			$conn = GetConnection();
			
			if (isset($row['id'])) 
			{
				$sql = "INSERT INTO 2014Spring_Products
				(Suplier_id,Name, Price, Picture_Url, Description,Catergory_Keyword_id)
				VALUES ('$row[Suplier_id]','$row[Name]', '$row[Price]','$row[Picture_Url]', '$row[Description]','$row[Catergory_Keyword_id]')";	
				
			//	$sql = "Update 2014Spring_Products
			//	Set Name='$row[Name]', Price='$row[Price]',Description='$row[Description]'
			//	WHERE id = $row[id]";
			}
			else
			{
				$sql = "Update 2014Spring_Products
				Set Suplier_id='$row[Suplier_id]', Name='$row[Name]', Price='$row[Price]',Picture_Url='$row[Picture_Url]',Description='$row[Description]',Catergory_Keyword_id='$row[Catergory_Keyword_id]'
				WHERE id = $row[id]";
				
			//	$sql = "INSERT INTO 2014Spring_Products
			//	(Name, Price, Description)
			//	VALUES ('$row[Name]', '$row[Price]', '$row[Description]')";	
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
	
