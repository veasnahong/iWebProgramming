    <style type="text/css">
     .navbar-brand.active { background-color:#000000; }
     .navbar-nav.active{background-color: #006DCC;}
    </style>
	<body>
		
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
		<!--div class="navbar navbar-inverse navbar-fixed-top" role="navigation"-->
	          <div class="container">
	            <div class="navbar-header">
		              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		              <a class="navbar-brand" href="index.php">Home</a>
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
			   
							<li class="dropdown">
						        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support<b class="caret"></b></a>
						        <ul class="dropdown-menu">
						          <li><a href="#">Action</a></li>
						          <li><a href="#">Another action</a></li>
						          <li><a href="#">Something else here</a></li>
						          <li><a href="#">Separated link</a></li>
						          <li><a href="#">One more separated link</a></li>
						        </ul>
				      		</li>
			
				 		  <form class="navbar-form navbar-right" role="form">
				            <div class="form-group">
				              <input type="text" placeholder="Email" class="form-control">
				            </div>
				            <div class="form-group">
				              <input type="password" placeholder="Password" class="form-control">
				            </div>
				            <button type="submit" class="btn btn-success">Sign in</button>
				          </form>
					</ul>
				</div>
	          </div>
	        </div>
	
	      </div>
	    </div>
	</body>
		
	
	
	
