
<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$action = $_REQUEST['action'];
	@$orders = $_REQUEST['orders'];
	
	switch ($action)
	{
		case 'create':
		break;
		case 'update':
		break;
		case 'delete':
		break;
		default:
		$model = Orders::Get();
		if($view == null) $view = 'index';
	}
	
	switch ($format) 
	{
		case 'plain':
		include __DIR__ . "/../Views/Orders/$view.php";	
		break;
		default:
		$view = __DIR__ . "/../Views/Orders/$view.php";	
		include __DIR__ . "/../Views/Shared/_Layout.php";

	}
