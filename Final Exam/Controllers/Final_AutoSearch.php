	<?php
	include_once __DIR__ . '/../inc/GetConnected.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
		@$view = $action = $_REQUEST['action'];
		@$format = $_REQUEST['format'];

			
		switch ($action)
		{
			
			default:
				$model = AutoComplete::Get();
				if($view == null) $view = 'index';
		}
	
		switch ($format) {
			case 'json':
				$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
				echo json_encode($ret);
				break;
			case 'plain':
				include __DIR__ . "/../Views/$view.php";			
				break;
			default:
				$view = __DIR__ . "/../Views/$view.php";	
				include __DIR__ . "/../Views/index.php";
				break;
		}