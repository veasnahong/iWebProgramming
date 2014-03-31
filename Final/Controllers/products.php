
<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$product = $_REQUEST['product'];
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Products::Get($_REQUEST['id']);
			break;
		case 'save':
			$errors = Products::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = Products::Save($_REQUEST);
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
			$model = Products::Get();
		if($view == null) $view = 'index';
	}
	
	switch ($product)
	 {
		case 'plain':
			include __DIR__ . "/../Views/Products/$view.php";	
			break;
			default:
			$view = __DIR__ . "/../Views/Products/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}