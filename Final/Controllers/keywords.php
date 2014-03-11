<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$keyword = $_REQUEST['keyword'];
	
	switch ($action)
	{
		case 'create':
		break;
		case 'update':
		break;
		case 'delete':
		break;
		default:
		$model = Keywords::Get();
		if($view == null) $view = 'index';
	}
	
	switch ($keyword) 
	{
		case 'plain':
		include __DIR__ . "/../Views/Keywords/$view.php";	
		break;
		default:
		$view = __DIR__ . "/../Views/Keywords/$view.php";	
		include __DIR__ . "/../Views/Shared/_Layout.php";
		break;
	}