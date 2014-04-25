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
		              <a class="navbar-brand" href="../Controllers/home.php"><span class="glyphicon glyphicon-home"></span></a>
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
				   		 <!-- <ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
						
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				              	 <span class="glyphicon glyphicon-shopping-cart"></span>Cart</a>
					              <ul class="dropdown-menu">
					                <li><a href="login">View Cart</a></li>
					                <li><a href="login">Saved Items</a></li>
					                <li><a href="login">Saved Cart</a></li>
					              </ul>
				            </li>
			           	</ul> -->
				   		 
				   		 <!-- <ul class="nav navbar-nav navbar-right"> 
							<li class="dropdown">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
				              <ul class="dropdown-menu">
				                <li><a href="../Controllers/addresses.php">Addresses</a></li>
				                <li><a href="../Controllers/contactMethods.php">ContactMethods</a></li> 
				                <li><a href="../Controllers/keywords.php">Keywords</a></li>
				                <li><a href="../Controllers/order_items.php">Order Items</a></li>
				                <li><a href="../Controllers/orders.php">Orders</a></li>
				                <li><a href="../Controllers/product_keywords.php">ProductKeywords</a></li>
				                <li><a href="../Controllers/products.php">Products</a></li>
				                <li><a href="../Controllers/supliers.php">Suppliers</a></li>
				                <li><a href="../Controllers/users.php">Users</a></li>
				                
				                <li class="divider"></li>
				                <li><a href="#">Logout</a></li>
				              </ul>
				            </li>
				        </ul>	 -->
			           
				
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
		
	
	
	
