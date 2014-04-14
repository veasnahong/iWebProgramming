<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Keywords {
		static public function Get($id = null)  //Read
		{
			if ($id == null)
			{
				// Get all records
				return fetch_all("SELECT P.id AS PID, P.Name AS Parent_Keyword, C.id AS CID, C.Name AS Child_Keyword 
									FROM 2014Spring_Keywords P JOIN 2014Spring_Keywords C ON P.id = C.Parent_id; ");
			}
			else
			{
				// Get one record
			}
		}
			static public function Save(&$row)			//Add & row
			{
				$conn = GetConnection();
				$row2 = escape_all($row, $conn);		//Add new line
				
				if (!empty($row['id']))
				{										// Change row to row2
					// $sql = "Update 2014Spring_Keywords					
								// Set FirstName='$row2[FirstName]', 
									// LastName='$row2[LastName]',
									// Username='$row2[Username]', 
									// Password='$row2[Password]', 
									// fbid='$row2[fbid]', 
									// UserType='$row2[UserType]'
								// WHERE id = $row2[id]";
				}
				else
				{
					// $sql = "INSERT INTO 2014Spring_Users (FirstName, LastName,Username, Password, fbid, UserType)
							// VALUES ('$row2[FirstName]', '$row2[LastName]', '$row2[Username]', '$row2[Password]', '$row2[fbid]', '$row2[UserType]' ) ";	
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
		static public function Create($row)	//Create
		{
			
		}
		static public function Blank()	// Blank
		{
			return array('id' => null);
		}
		
		static public function update($row)	//Update
		{
			
		}
		static public function Delete($id)	// Delete
		{
			
		}
		
		static public function validate($row)
		{
			
		}
		public static function SelectListFor($TypeId) {
			$sql = "SELECT id, Name FROM 2014Spring_Keywords WHERE Parent_id = $TypeId ";
			return fetch_all($sql);
		}

	}
