	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$contactMethods = $_REQUEST['contactMethods'];

	switch ($action)
	{
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = ContactMethods::Get($_REQUEST['id']);
			break;
		case 'save':
			$errors = ContactMethods::Validate($_REQUEST);
			if(!$errors)
			{
				$errors = ContactMethods::Save($_REQUEST);
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
			$model = ContactMethods::Get();
		if($view == null) $view = 'index';
	}
	
	switch ($contactMethods)
	 {
		case 'plain':
			include __DIR__ . "/../Views/ContactMethods/$view.php";	
			break;
			default:
			$view = __DIR__ . "/../Views/ContactMethods/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}
