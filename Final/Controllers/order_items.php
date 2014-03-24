	<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$orderItems = $_REQUEST['orderItems'];
	
	
	switch ($action)
	{
		case 'new':
			$view = 'edit';
		break;
		case 'edit':
			$model = OrderItems::Get($_REQUEST['id']);
			break;
		case 'save':
			// TODO: Validate
			if(!$errors = OrderItems::Save($_REQUEST))
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
			$model = OrderItems::Get();
			if($view == null) $view = 'index';
	}
	
	switch ($orderItems)
	 {
		case 'plain':
			include __DIR__ . "/../Views/Order_Items/$view.php";	
			break;
			default:
			$view = __DIR__ . "/../Views/Order_Items/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}
