     <style type="text/css">
     .navbar-brand.active { background-color:#BFBFBF }
     .navbar-nav.active{background-color: #006DCC;}
    </style>
	<body>

		<!--div class="navbar navbar-inverse navbar-static-top" role="navigation"-->
		<!--div class="navbar navbar-inverse navbar-fixed-top" role="navigation"-->
		<div class="navbar navbar-default">
	          <div class="container">
	            <div class="navbar-header">
		              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		              <a class="navbar-brand" href="../Controllers/homePage.php"><span class="glyphicon glyphicon-home"></span></a>
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
				        </div>
				      </div>
				    </div>
			       
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
		
	
	
	
