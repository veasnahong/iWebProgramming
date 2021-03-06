﻿<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/carousel/carousel.css" rel="stylesheet">
       <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/signin/signin.css" rel="stylesheet">
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
  			<h1>Login <small></small></h1>

		</div>
		
   		<div class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
	              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	              <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
	              <!--a class="navbar-brand" href="./">Home</a-->
	            </div>
		            <div class="navbar-collapse collapse">
		           
					<ul class="nav navbar-nav">
						<? $links = array
							(
								array('class' => 'stores-menu', 'link' => 'stores.php', 'title' => 'Stores' ),
								array('class' => 'deals-menu', 'link' => 'deals.php', 'title' => 'Shops & Deals' ),
								array('class' => 'myshop-menu', 'link' => 'myshop.php', 'title' => 'My Shop' ),
								array('class' => 'service-menu', 'link' => 'service.php', 'title' => 'Service' ),
								
							);
						?>
						<? foreach ($links as $value) { ?>
						<li class="<?=$value['class']?>" ><a href="<?=$value['link']?>"><?=$value['title']?></a></li>
						<? } ?>
			   			</ul>
			   			
			          <ul class="nav navbar-nav navbar-right"> 
						<li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="login.php">Sign in</a></li>
			                <li><a href="createAccount.php">Create an Account</a></li> 
			                <li class="divider"></li>
			                <li><a href="#">Logout</a></li>
			              </ul>
			            </li>
		           	</ul></br></br>
				</div>
	          </div>
	        </div>
	      </div>
	    </div>
    	</br></br></br></br></br></br></br></br>
     
	    <div class="container">
	      <form class="form-signin" role="form">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <input type="email" class="form-control" placeholder="Email address" required autofocus>
	        <input type="password" class="form-control" placeholder="Password" required>
	        <label class="checkbox">
	          <input type="checkbox" value="remember-me"> Remember me
	        </label>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      </form>
	    </div> <!-- /container -->
	   


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
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/docs/assets/js/docs.min.js"></script>
    
    <script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>
  </body>
</html>
