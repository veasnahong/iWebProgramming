
	<style type="text/css">
		.error 
		{
			color: red;
		}
		.my-horizontal label 
		{
			display: inline-block;
			width: 150px;
			text-align: right;
			margin-right: 10px;
		}
		.my-horizontal .form-control
		{
			display: inline-block;
		}
		@media screen and (min-width: 768px) 
		{
			.my-horizontal .form-control
			{
				width: 25%;
				margin-bottom: 5px;
			}
		}
	</style>
	
	<legend><h2>Edit: <?=$model['UsersID_Name']?></h2></legend>
	
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form action="?action=save" method="post" class="my-horizontal">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
			
		<div class="form-group <?if(!empty($errors['User_id'])) echo 'has-error has-feedback' ?> ">
			<label for="User_id">User ID:</label>
			<input class="form-control" type="text" name="User_id" id="User_id" value="<?=$model['User_id']?>" placeholder="User ID" />
			
			<? if(!empty($errors['User_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['User_id']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Address_id'])) echo 'has-error has-feedback' ?> ">
			<label for="AddressType">Address ID:</label>
			<input class="form-control" type="text" name="Address_id" id="Address_id" value="<?=$model['Address_id']?>" placeholder="Address ID" />
			
			<? if(!empty($errors['Address_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Address_id']?></span>
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
	
