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
			break;
		case 'save':
			// TODO: Validate
			Users::Create($_REQUEST);
			$view = 'edit';
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

