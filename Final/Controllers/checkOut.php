<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';

	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];

	Accounts::RequireLogin();			// Require User Login			
	
	switch ($action){
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = CheckOut::Get($_REQUEST['id']);
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
			//$errors = Users::Validate($_REQUEST);
			if(!$errors){
				$errors = CheckOut::Save($_REQUEST);
			}
			if(!$errors)
			{
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();
			}
			else
			{
				//print_r($errors);
				$model = $_REQUEST;
				$view = 'checkOut';

			}
			break;
		case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				//Promt
				$model = CheckOut::Get($_REQUEST['id']);
			}else{
				$errors = CheckOut::Delete($_REQUEST['id']);
			}
			break;
		default:
			// $model = CheckOut::Get();
			// if($view == null) $view = 'checkOut';
			$view = 'checkOut';				// Display Products
				$model = CheckOut::Get();
				
			if($view == null)
			{
				// For Andmin display
				$view = 'checkOut';				// Display Products
				$model = CheckOut::Get();
			}	
			else
			{
				$view = 'checkOut';
				$model = CheckOut::Get();
			}
	}

	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/CheckOut/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/CheckOut/$view.php";	
			include __DIR__ . "/../Views/Checkout/checkOut.php";
			break;
	}
	