<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico">

    <title>Shops & Deals</title>

    <!-- Bootstrap core CSS -->
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
	
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
      	
		<? include '../inc/header.php';?> 	<!-- Header -->		
        <? include '../inc/navUsers.php';?>		<!-- Navigation Menu Bar-->	
       	
	      <!-- Main jumbotron for a primary marketing message or call to action -->
		      <div class="jumbotron"></br></br>
		        <h1>Today Special</h1>
		        <p>Learn more about today special.</p>
		        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
		      </div>
		      
		<? include $view; ?> <br/>			<!-- Display table-->
      	<? include '../inc/footer.php';?>		<!-- footer-->


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <?
    	if(function_exists("JavaScripts")){
    		JavaScripts();
    	}
    ?>
    <script type="text/javascript">
		$(function(){
			$(".deals-menu").addClass("active");
		})
		$('.dropdown-toggle').dropdown()
	</script>
  </body>
</html>
