
<!DOCTYPE html>
<html lang="en">
  <head>
  	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico">

    <title>My$tore Order Status</title>

    <!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet">

  </head>
  
<!-- NAVBAR
================================================== -->
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
  <body>
    <div class="navbar-wrapper">
      <div class="container">
      	
      	<? include '../inc/header.php';?> 	<!-- Header -->		
        <? include '../inc/nav.php';?>		<!-- Navigation Menu Bar-->	
       	
       	<div class="container">
	     
	     <div class="container-fluid">
	     	<legend><h3>Please Sign In </h3></legend>
	     
				<form class="form-horizontal col-md-6" action="?action=save" method="post" id="register-form" >
					<fieldset>
						<h4>Returning Customer</h4>
						<div class="form-group">
							<div class="col-md-4">
								<input id="username" name="username" type="text" placeholder="Username" class="form-control input-md">
							</div>
						</div>
						<div class="form-group">
			           	   	<div class="col-md-4">
								<input id="password" name="password" type="password" placeholder="password" class="form-control input-md">
			            	</div>
						</div>
						  <div class="form-group col-md-4">
						      <div class="checkbox">
						        <label><input type="checkbox"> Remember me</label>
						        <button type="submit" class="btn btn-primary">Sign in</button>
						  </div>
					</fieldset>
				</form>
				
				<form class="form-horizontal col-md-6" action="?action=save" method="post" id="register-form">
					<fieldset>
						<h4>Single Order Lookup</h4>
						<div class="form-group">
							<div class="col-md-4">
								<input id="orderNumber" name="orderNumber" type="text" placeholder="Order Number" class="form-control input-md">
							</div>
						</div>
						<div class="form-group">
			           	   	<div class="col-md-4">
								<input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-md">
			            	</div>
						</div>
						 
					   <div class="form-group col-md-4">	   
					       <label>Find Order Number </label>
					       <button type="submit" class="btn btn-primary">Continue</button>
			  		   </div>
					</fieldset>
				</form>
		
		</div>	      

      	<? include '../inc/footer.php';?>		<!-- footer-->

    	</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
   <script type="text/javascript">
		$(function(){
			$(".navbar-brand").addClass("active");
		})
		$('.dropdown-toggle').dropdown() 
		})
	</script>
 	<?
     if(function_exists("JavaScripts"))
     {
     	JavaScripts();
     }
    ?>
  </body>
</html>
