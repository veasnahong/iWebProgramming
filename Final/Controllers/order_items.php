	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];
	
	Accounts::RequireLogin();			// Require User Login
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = OrderItems::Get($_REQUEST['id']);
			
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';  // If it empty it created otherwise updated
			$errors = OrderItems::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = OrderItems::Save($_REQUEST);
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
				$model = OrderItems::Get($_REQUEST['id']);
			}
			else
			{
				$errors = OrderItems::Delete($_REQUEST['id']);
				
			}
			break;
		default:
		$model = OrderItems::Get();
		if($view == null) $view = 'index';
	}
				
	switch ($format) 
	{
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
	
		case 'plain':
			include __DIR__ . "/../Views/Order_Items/$view.php";	
			break;
			default:
			
		$view = __DIR__ . "/../Views/Order_Items/$view.php";	
		include __DIR__ . "/../Views/Shared/_Layout.php";
		break;
	}