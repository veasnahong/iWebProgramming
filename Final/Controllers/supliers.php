	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$supliers = $_REQUEST['supliers'];
	
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
		break;
		case 'edit':
			$model = Supliers::Get($_REQUEST['id']);
			break;
		case 'save':
			// TODO: Validate
			if(!$errors = Supliers::Save($_REQUEST))
			{
				header("Location: ?");
				die();
			}
			else
			{
				print_r($errors);
				$model = $_REQUEST;
				$view = 'edit';
			}
			break;
		case 'delete':
			break;
			default:
			$model = Supliers::Get();
			if($view == null) $view = 'index';
	}
	
	switch ($supliers)
	 {
		case 'plain':
			include __DIR__ . "/../Views/Supliers/$view.php";	
			break;
			default:
			$view = __DIR__ . "/../Views/Supliers/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}