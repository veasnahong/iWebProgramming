<style type="text/css">
	.error {
		color: red;
	}
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align: right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}

	.has-feedback .form-control-feedback {
		display: inline-block;
		right: auto;
		top: auto;
		margin-left: -40px;
	}
	.has-error {
		color: red;
	}

	@media screen and (min-width: 768px) {
		.my-horizontal .form-control{
			width: 25%;
		}
	}
	</style>
	 
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form method="post" >
      	<div class="modal-header" >
       		<h4 class="modal-title pull-left">Please Log in: </h4>
       		<!-- <form method="post" class="my-horizontal col-sm-4" >  -->
  		 	<label class="control-label"> </label>
	    	<button class="btn btn-primary pull-right" id="fb-login" >Join Us on Facebook</button>
	    	<img id="fb-picture" class="pull-right" /></br></br>
	
    <!-- </form>  -->
       	</div>
    </form>
            	
    <form method="post"  class="my-horizontal col-sm-6 pull-left">
      	<div class="modal-header" >
      		<!-- <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> -->
       		<h4 class="modal-title">Return Customer</h4></br>

				<div class="form-group <?if(isset($errors['email'])) echo 'has-error has-feedback' ?> ">
					<label class="control-label" for="email">Email or Phone Number:</label>
					<input class="required form-control" type="text" name="email" id="email" value="<?=$model['email']?>" placeholder="Email or Phone Number" />
					<? if(isset($errors['email'])): ?>
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						<span ><?=$errors['email']?></span>
					<? endif ?>
				</div>
		
				<div class="form-group <?if(isset($errors['password'])) echo 'has-error has-feedback' ?> ">
					<label class="control-label" for="password">Password:</label>
					<input class="required form-control" type="password" name="password" id="password" value="<?=$model['password']?>" placeholder="Password" />
					<? if(isset($errors['password'])): ?>
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						<span ><?=$errors['password']?></span>
					<? endif ?>
				</div>
					
					<div class="form-group">
						<label class="control-label"></label>
						<input class="btn btn-primary" type="submit" value="Login" />
						<a href="?" data-dismiss="modal">Cancel</a>
			      </div>
			</div>  
      </form>
		      
	    <form method="post" class="my-horizontal col-sm-6 pull-right" >
	     <div class="modal-header" >
	        <!-- <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> -->
	        <h4 class="modal-title">New Customer: <small>Register</small></h4></br>
	
		    <div class="form-group">
		    	
		    	<input type="hidden" name="id" value="<?=$model['id']?>" />
		    	
					<div class="form-group <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
						<label for="FirstName">First Name:</label>
						<input class="form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
					
						<? if(isset($errors['FirstName'])): ?>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							<span><?=$errors['FirstName']?></span>
						<? endif ?>
					</div>
					
					<div class="form-group <?if(isset($errors['LastName'])) echo 'has-error has-feedback' ?> ">
						<label class="control-label" for="LastName">Last Name:</label>
						<input class="form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
						
						<? if(isset($errors['LastName'])): ?>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							<span ><?=$errors['LastName']?></span>
						<? endif ?>
					</div>
							
					<div class="form-group <?if(isset($errors['email'])) echo 'has-error has-feedback' ?> ">
						<label class="control-label" for="email">Email Address:</label>
						<input class="required form-control" type="text" name="email" id="email" value="<?=$model['email']?>" placeholder="Email Address" />
						<? if(isset($errors['email'])): ?>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							<span ><?=$errors['email']?></span>
						<? endif ?>
					</div>
					
					<div class="form-group <?if(isset($errors['password'])) echo 'has-error has-feedback' ?> ">
						<label class="control-label" for="password">Password:</label>
						<input class="required form-control" type="password" name="password" id="password" value="<?=$model['password']?>" placeholder="Password" />
						<? if(isset($errors['password'])): ?>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							<span ><?=$errors['password']?></span>
						<? endif ?>
					</div>
					
					<div class="form-group">
						<label class="control-label"></label>
						<input class="btn btn-primary" type="submit" value="Submit" />
						<a href="?" data-dismiss="modal">Cancel</a>
				 </div></br><legend> </legend> <!-- line-->	
						
			</div>
		 </form></br>
    
	    <? function JavaScripts(){ ?>
	        
		   <script type="text/javascript">
		    	$(function(){
		    		$("#fb-login").click(function(){
		    			FB.login(null,{scope: 'email,user_likes'});
		    		});
		    	})
		    	fbStuff = function(){
		    		
		    		FB.getLoginStatus(function(response) 
		    		{
					  console.log(response);
					  
					  if (response.status === 'connected') 
					  {
					  	// Get user First Name, Last Name, and Picture to display on login screen
					    FB.api("me", function(response){
					    	console.log(response);
					    	$(".navbar-collapse").append("  " + "Welcome: " + response.first_name +" " +response.last_name)
					    	$("#fb-picture").attr({src: "http://graph.facebook.com/" + response.id + "/picture"})
					    	
					    	// Ask user to share link on their facebook
						    FB.ui(
						    {
						       method: 'feed',
						       name: 'My $tore',
						       caption: 'Save money live better!',
						       description: ('Low Price Garrentied Everyday. '),
						       link: 'http://cs.newpaltz.edu/~n01912690/iWebProgramming/Final/Controllers/index.php#/items',
						       picture: 'http://www.fbrell.com/public/images/dogs_mythicseabass_4662963501.jpg'
						     },
						     function(response) {
						        if (response && response.post_id) 
						        {
						          alert('Thank you for your support, and you will receive 20% OFF for your next purchase.');
						        } 
						        else 
						        {
						          alert('Post was not published.');
						        }
						      }
						    );
					   
					    });
					  }
					  else {
					    
					  }
					});
					
						
					
		    	}
		    	
		    </script>
	    
	    
			<script>
			      window.fbAsyncInit = function() {
			        FB.init({
			          appId      : '722675741128243',
			          xfbml      : true,
			          version    : 'v2.0'
			        });
			        fbStuff();
			      };
			
			      (function(d, s, id){
			         var js, fjs = d.getElementsByTagName(s)[0];
			         if (d.getElementById(id)) {return;}
			         js = d.createElement(s); js.id = id;
			         js.src = "//connect.facebook.net/en_US/sdk.js";
			         fjs.parentNode.insertBefore(js, fjs);
			       }(document, 'script', 'facebook-jssdk'));
		    </script>
	    <? } ?>
	 