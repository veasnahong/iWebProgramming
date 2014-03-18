﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico">

    <title>Deals</title>

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
      	
		<div class="page-header">
			<form class="navbar-form navbar-right" role="search">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
  			<h1>Deals & Shops <small>Today only 40% OFF</small></h1>
		</div>
		
       	<? include '../inc/nav.php';?>
       	
       	<div class="container">

	      <!-- Main jumbotron for a primary marketing message or call to action -->
		      <div class="jumbotron"></br></br>
		        <h1>Today is Clearance</h1>
		        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
		      </div>
	
	      <!-- FOOTER -->
	      <footer>
	         <!--p class="pull-right"><a href="#">Back to top</a></p-->
	        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	      </footer>

    	</div><!-- /.container -->


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
		$(function(){
			$(".deals-menu").addClass("active");
		})
		$('.dropdown-toggle').dropdown()
	</script>
  </body>
</html>
