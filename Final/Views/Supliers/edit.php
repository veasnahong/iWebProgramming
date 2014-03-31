
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
	<legend><h2>Edit: <?=$model['UsersID_Name']?></h2></legend>
	
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form action="?action=save" method="post" class="my-horizontal">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
			
		<div class="form-group <?if(!empty($errors['Name'])) echo 'has-error has-feedback' ?> ">
			<label for="Name">Suppliers:</label>
			<input class="form-control" type="text" name="Name" id="Name" value="<?=$model['Name']?>" placeholder="Supplier Name" />
			
			<? if(!empty($errors['Name'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Name']?></span>
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
	
