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
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/carousel.css" rel="stylesheet">
	
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/docs/examples/carousel/carousel.css" rel="stylesheet">

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
				
			 <!-- Carousel
			    ================================================== -->
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner">
		        <div class="item active">
		          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:New Arrival" alt="New Arrival">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>New Arrival</h1>
		              <p>Laptop, Tablet, SmartPhpne, Accessories. What do you have in mind? </p>
		              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
		            </div>
		          </div>
		        </div>
		        
		        <div class="item">
		          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>Another example headline.</h1>
		              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
		            </div>
		          </div>
		        </div>
		        
		        <div class="item">
		          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1>One more for good measure.</h1>
		              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
		            </div>
		          </div>
		        </div>
		      </div>
		      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		    </div><!-- /.carousel -->


				<div>
					<p>  </p>	
				</div><br/>

      <!-- FOOTER -->
      <legend> </legend>
      <footer>
		<ul class="nav nav-pills">
			 <li><a href="#">Contact</a></li>
		  	 <li><a href="#">Carrer</a></li>
		  	 <li><a href="#">About</a></li>
			 <li><a href="#">Store Location</a></li>
		</ul>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/assets/js/docs.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/dist/js/bootstrap.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/docs/assets/js/docs.min.js"></script>
    
    <script type="text/javascript">
		$(function(){
			$(".navbar-brand").addClass("active");
		})
		$('.dropdown-toggle').dropdown()

	</script>
  </body>
</html>
