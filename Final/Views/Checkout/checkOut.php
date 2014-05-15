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
    		      
		    <form method="post" class="my-horizontal col-sm-14" >
		     <div class="modal-header" >
		        <!-- <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> -->
		        <h5 class="modal-title">Customer Information</h5>

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
								
						<div class="form-group <?if(!empty($errors['Addresses'])) echo 'has-error has-feedback' ?> ">
							<label for="Addresses">Address:</label>
							<input class="form-control" type="text" name="Addresses" id="Addresses" value="<?=$model['Addresses']?>" placeholder="Addresses" />
							
							<? if(!empty($errors['Addresses'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span><?=$errors['Addresses']?></span>
							<? endif ?>
						</div>
						
						<div class="form-group <?if(!empty($errors['City'])) echo 'has-error has-feedback' ?> ">
							<label for="City">City:</label>
							<input class="form-control" type="text" name="City" id="City" value="<?=$model['City']?>" placeholder="City" />
							
							<? if(!empty($errors['City'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span><?=$errors['City']?></span>
							<? endif ?>
						</div>
						
						<div class="form-group <?if(!empty($errors['State'])) echo 'has-error has-feedback' ?> ">
							<label for="State">State:</label>
							<input class="form-control" type="text" name="State" id="State" value="<?=$model['State']?>" placeholder="State" />
							
							<? if(!empty($errors['State'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span><?=$errors['State']?></span>
							<? endif ?>
						</div>
						
						<div class="form-group <?if(!empty($errors['Zip'])) echo 'has-error has-feedback' ?> ">
							<label for="Zip">Zip:</label>
							<input class="form-control" type="text" name="Zip" id="Zip" value="<?=$model['Zip']?>" placeholder="Zip" />
							
							<? if(!empty($errors['Zip'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span><?=$errors['Zip']?></span>
							<? endif ?>
						</div>
						
						<div class="form-group <?if(!empty($errors['Country'])) echo 'has-error has-feedback' ?> ">
							<label for="Country">Country:</label>
							<input class="form-control" type="text" name="Country" id="Country" value="<?=$model['Country']?>" placeholder="Country" />
							
							<? if(!empty($errors['Country'])): ?>
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span><?=$errors['Country']?></span>
							<? endif ?>
						</div>
						
						<legend> </legend> <!-- line-->	
						
						<div class="form-group">
							<label class="control-label"></label>
							<input class="btn btn-success" type="submit" value="CheckOut" />
							<input class="btn btn-primary" type="submit" value="Continue Shopping" />
							 <!-- <p><a href="../Controllers/index.php" class="btn btn-primary btn-lg" role="button" >Learn more &raquo;</a></p> -->
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
