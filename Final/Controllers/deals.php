	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
		@$view 		= $action = $_REQUEST['action'];
		@$format 	= $_REQUEST['format'];
		@$id		= $_REQUEST['id'];
		@$category_id = $_REQUEST['category_id'];
		$layout		= '_deals';
		
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Shops_Deals::Get($_REQUEST['id']);
			
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';  // If it empty it created otherwise updated
			$errors = Shops_Deals::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = Shops_Deals::Save($_REQUEST);
			}
		if(!$errors)
		{
			header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");	// Header
			die();
		}
		else
		{
			//print_r($errors);
			$model = $_REQUEST;
			$view = 'edit';
		}
		break;
		case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET')
			{
				$model = Shops_Deals::Get($_REQUEST['id']);
			}
			else
			{
				$errors = Shops_Deals::Delete($_REQUEST['id']);
				
			}
			break;
		default:									// Controller identify whether Admin or Public	
			if($view == null)
			{
				$layout = '_deals';
				$view = 'home';
			}	
			else
			{
				$view = 'index';
				$model = Shops_Deals::Get();
			}
			
	}
				
	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/Shops_Deals/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Shops_Deals/$view.php";	
			include __DIR__ . "/../Views/Shared/$layout.php";
			break;
	}
