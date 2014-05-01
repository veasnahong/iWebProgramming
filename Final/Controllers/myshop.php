<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';

	@$view 		= $action = $_REQUEST['action'];
	@$format 	= $_REQUEST['format'];

	switch ($action)
	{
		
		
		
	}
	switch ($format) { 
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/Accounts/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Accounts/$view.php";	
			include __DIR__ . "/../Views/Shared/myshop.php";
			break;
	}