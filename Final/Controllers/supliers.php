
<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$supliers = $_REQUEST['product'];
	
	switch ($action)
	{
		case 'create':
		break;
		case 'update':
		break;
		case 'delete':
		break;
		default:
		$model = Products::Get();
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