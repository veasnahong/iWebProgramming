	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];
	
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Users::Get($_REQUEST['id']);
			
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';  // If it empty it created otherwise updated
			$errors = Users::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = Users::Save($_REQUEST);
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
			break;
			default:
			$model = Users::Get();
		if($view == null) $view = 'index';
	}
	
	switch ($format) 
	{
		case 'plain':
		include __DIR__ . "/../Views/Users/$view.php";	
		break;
		default:
		$view = __DIR__ . "/../Views/Users/$view.php";	
		include __DIR__ . "/../Views/Shared/_Layout.php";
		break;
	}