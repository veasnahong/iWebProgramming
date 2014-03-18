<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
   
    <title>Home</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">

        <style type="text/css">
     /* Move down content because we have a fixed navbar that is 50px tall */
    </style>
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
  			<h1>Welcome to my store </h1>
		</div>
 
		   <? include '../inc/nav.php';?>	
		
			<div class="container">
		 		<div class="jumbotron">
			  		<h1>Welcome to my store</h1>
			  		<p>Find a low price and we'll match it.</p>
			  		<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
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
			$(".navbar-brand").addClass("active");
		})
		$('.dropdown-toggle').dropdown()

	</script>
  </body>
</html>
