﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico"> -->

    <title>My Shop</title>

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
			        <h2>Admin Login: <small> to add, remove or modify database.</small></h2>
			        <p> For test purposes: </br>
			        	Admin: Please go to Services Tab and under "Return Customer"</br>
			        	Login: Phone# 8452826677</br>
			        		   Password: abc1234
			       </p>
			         <p><a href="../Controllers/service.php" class="btn btn-primary btn-lg" role="button" >Learn more &raquo;</a></p>
			      </div>
			      
	      		<? include '../inc/footer.php';?>		<!-- footer-->	
	    	</div><!-- /.container -->
	    </div><!-- /.wrapper -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
		$(function(){
			$(".myshop-menu").addClass("active");
		})
		$('.dropdown-toggle').dropdown()
	</script>
  </body>
</html>
