<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Keywords {
		static public function Get($id = null)  //Read
		{
			//print_r('asdfa');
			if ($id == null)	// Optional parameter
			{	// Get all records
			//	print_r('asdfa');
				return fetch_all("SELECT * FROM 2014Spring_Keywords");
			}
			else
			{	// Get single record
					
			}
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
