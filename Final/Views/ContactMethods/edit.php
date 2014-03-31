	
	
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
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
		
		<div class="form-group <?if(!empty($errors['ContactMethodType'])) echo 'has-error has-feedback' ?> ">
			<label for="ContactMethodType">Contact Method Type:</label>
			<!-- <input class="form-control" type="text" name="ContactMethodType" id="ContactMethodType" value="<?=$model['ContactMethodType']?>" placeholder="Contact Method Type" /> -->
			
			<select class="form-control"class="col-md-4" input id="ContactMethodType" name="ContactMethodType" type="text" value="<?=$model['ContactMethodType']?>"placeholder="Contact Method Type" />
			      <option>10</option>
				  <option>11</option>
				  <option>12</option>
				  <option>13</option>
			</select> 
			
			<? if(!empty($errors['ContactMethodType'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['ContactMethodType']?></span>
			<? endif ?>
		</div>

		<div class="form-group <?if(!empty($errors['Value'])) echo 'has-error has-feedback' ?> ">
			<label for="Value">Value:</label>
			<input class="form-control" type="text" name="Value" id="Value" value="<?=$model['Value']?>" placeholder="Value" />
			
			<? if(!empty($errors['Value'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Value']?></span>
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
	
