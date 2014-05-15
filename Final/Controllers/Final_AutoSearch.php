<?php
	include_once __DIR__ . '/../inc/GetConnected.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
		@$view 		= $action = $_REQUEST['action'];
		@$format 	= $_REQUEST['format'];
		// @$id		= $_REQUEST['id'];
		// @$category_id = $_REQUEST['category_id'];
		$layout		= '_home';
		
	switch ($action)
	{
	
		default:									// Controller identify whether Admin or Public
		
			if($view == null)
			{
				$layout = '_home';
				$view = 'home';
				
			}	
			else
			{
				$view = 'index';
				$model = MyHomePage::Get();
			}
	}
				
	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/Final_AutoComplete/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Final_AutoComplete/$view.php";	
			include __DIR__ . "/../Views/Shared/_layout.php";
			break;
	}
