
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/carousel/carousel.css" rel="stylesheet">
        <style type="text/css">
     /* Move down content because we have a fixed navbar that is 50px tall */
    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
    	
	    <div class="container">
	      	<? include '../inc/header.php';?> 	<!-- Header -->		
	        <? include '../inc/nav.php';?>		<!-- Navigation Menu Bar-->	
		</div>
 		   
		<div class="container">
      		<? include $view; ?><br/>				<!-- Display table-->
      		<? include '../inc/footer.php';?>		<!-- footer-->
   		 </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/docs/assets/js/docs.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
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
