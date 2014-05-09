	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
		@$view 		= $action = $_REQUEST['action'];
		@$format 	= $_REQUEST['format'];
		@$id		= $_REQUEST['id'];
		@$category_id = $_REQUEST['category_id'];
		$layout		= '_Layout';
	
	Accounts::RequireLogin();			// Require User Login
		
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Products::Get($_REQUEST['id']);
			
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';  // If it empty it created otherwise updated
			$errors = Products::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = Products::Save($_REQUEST);
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
				$model = Products::Get($_REQUEST['id']);
			}
			else
			{
				$errors = Products::Delete($_REQUEST['id']);
				
			}
			break;
		default:									// Controller identify whether Admin or Public
		// $model = Products::Get();
		// if($view == null) $view = 'home';
		
			if($view == null)
			{
				// For User display
				// $layout = '_PublicLayout';
				// $view = 'angular';
				// $view = 'home';
				
				// For Andmin display
				$view = 'index';				// Display Products
				$model = Products::Get();
			}	
			else
			{
				$view = 'index';
				$model = Products::Get();
			}
			
	}
				
	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/Products/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Products/$view.php";	
			include __DIR__ . "/../Views/Shared/$layout.php";
			break;
	}
