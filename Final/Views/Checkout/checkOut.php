<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico"> -->

    <title>Check Out</title>

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
      	
      	<? include '../inc/tableStyle.php';?>
      	<? include '../inc/header.php';?> 	<!-- Header -->		
        <? include '../inc/navUsers.php';?>		<!-- Navigation Menu Bar-->	
  <!-- -------------------------------------------------------------------------------------------     	 -->
       	 	<ul class="error">
				<? foreach ($errors as $key => $value): ?>
					<li><b><?=$key?>:</b> <?=$value?></li>
				<? endforeach; ?>
			</ul>
     <!-- -------------------------------------------------------------------------------------------     	 -->  	
    		
		 <form method="post"  class="my-horizontal col-sm-6">
	      	<div class="modal-header" >
	       		<h4 class="modal-title">Return Customer</h4>

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
		      
		    <form method="post" class="my-horizontal col-sm-6" >
		     <div class="modal-header" >
		        <!-- <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> -->
		        <h4 class="modal-title">New Customer</h4>

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
								<div class="form-group <?if(isset($errors['Username'])) echo 'has-error has-feedback' ?> ">
								<label class="control-label" for="Username">Username:</label>
								<input class="form-control" type="text" name="Username" id="LastName" value="<?=$model['Username']?>" placeholder="Username" />
								
								<? if(isset($errors['Username'])): ?>
									<span class="glyphicon glyphicon-remove form-control-feedback"></span>
									<span ><?=$errors['Username']?></span>
							<? endif ?>
						</div>
						
						<div class="form-group">
							<label class="control-label" for="Password">Password:</label>
							<input class="form-control" type="password" name="Password" id="Password" value="<?=$model['Password']?>" placeholder="Password" />
						</div>
						
						<div class="form-group">
							<label class="control-label" for="fbid">Facebook ID:</label>
							<input class="form-control" type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" placeholder="Facebook ID" />
						</div>
					
						<div class="form-group <?if(isset($errors['UserType'])) echo 'has-error has-feedback' ?> ">
							<label class="control-label" for="UserType">User Type:</label>
							
							<select size="1" class="required form-control" name="UserType" id="UserType" value="<?=$model['UserType']?>">
								<option value="">--User Type--</option>
								<? foreach (Keywords::SelectListFor(2) as $row): ?>
									<option <?if($row['id'] == $model['UserType']) echo 'selected'; ?> value="<?=$row['id']?>">
										<?=$row['Name']?>
									</option>
								<? endforeach; ?>
							</select>
							
							<? if(isset($errors['UserType'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span ><?=$errors['UserType']?></span>
							<? endif ?>
						</div>
						
						<legend> </legend> <!-- line-->	
						
						<div class="form-group">
							<label class="control-label"></label>
							<input class="btn btn-primary" type="submit" value="Submit" />
							<a href="?" data-dismiss="modal">Cancel</a>
					 </div></br>
							
				</div>
			 </form></br>
    	

        
      	<? include '../inc/footer.php';?>		<!-- footer-->

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
	<? function JavaScripts(){ global $model; ?>
			<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
			<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
			<script type="text/javascript">
				$(function(){
					$("form").validate();
					$("#UserType").val(<?=$model['UserType']?>);
				})
			</script>
		<? } ?>
  </body>
</html>
