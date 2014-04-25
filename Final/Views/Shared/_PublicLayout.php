<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout Page</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    </style>
  </head>

  <body>

	<header class="jumbotron">
		<div class="container">
			<h1 class="glyphicon glyphicon-tower">The M-Store</h1>		
		</div>
	</header>

    <div class="navbar-wrapper">
	    	
		    <div class="container">
		      	<? include '../inc/header.php';?> 	<!-- Header -->		
		        <? include '../inc/navUsers.php';?>		<!-- Navigation Menu Bar-->	
		
	      		<? include $view;?><br/>				<!-- Display table-->
	      		<? include '../inc/footer.php';?>		<!-- footer-->
	   		 </div><!-- /.container -->
	   	</div><!-- /. Wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <?
    	if(function_exists("JavaScripts")){
    		JavaScripts();
    	}
    ?>
  </body>
</html>