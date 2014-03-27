	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$orders = $_REQUEST['orders'];
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Orders::Get($_REQUEST['id']);
			break;
		case 'save':
			$errors = Orders::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = Orders::Save($_REQUEST);
			}
		if(!$errors)
		{
			header("Location: ?");
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
			$model = Orders::Get();
		if($view == null) $view = 'index';
	}
	switch ($orders)
	 {
		case 'plain':
			include __DIR__ . "/../Views/Orders/$view.php";	
			break;
			default:
			$view = __DIR__ . "/../Views/Orders/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}
