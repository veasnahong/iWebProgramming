	
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
	<legend><h2>Edit: <?=$model['FirstName']?> <?=$model['LastName']?></h2></legend>
	
		<ul class="error">
			<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
			<? endforeach; ?>
		</ul>
		<form action="?action=save" method="post" class="my-horizontal">
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
					<option value="">Select User Type</option>
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
			
			<div class="form-group">
				<legend> </legend>
				<label class="col-md-2 control-label" for="singlebutton">Click Submit:</label>
				<div class="col-md-2">
					<button id="Save" type="submit "Save" value="Save" class="btn btn-primary">Submit</button>
				</div>
			</div><br>
		</form>
		
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

