
	
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
	<legend><h2>Edit: <?=$model['Name']?></h2></legend>
	
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form action="?action=save" method="post" class="my-horizontal">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
			
		<div class="form-group <?if(!empty($errors['Suplier_id'])) echo 'has-error has-feedback' ?> ">
			<label for="Suplier_id">Supplier ID</label>
			<input class="form-control" type="text" name="Suplier_id" id="Suplier_id" value="<?=$model['Suplier_id']?>" placeholder="Supplier ID" /> 
			<!--<select class="form-control"class="col-md-4" input id="Suplier_id" name="Suplier_id" type="text" value="<?=$model['Suplier_id']?> placeholder="Supplier ID"">
					      <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
			</select>-->
			<? if(!empty($errors['Suplier_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Suplier_id']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Name'])) echo 'has-error has-feedback' ?> ">
			<label for="Name">Name:</label>
			<input class="form-control" type="text" name="Name" id="Name" value="<?=$model['Name']?>" placeholder="Name" />
			
			<? if(!empty($errors['Name'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Name']?></span>
			<? endif ?>
		</div>

		<div class="form-group <?if(!empty($errors['Price'])) echo 'has-error has-feedback' ?> ">
			<label for="Price">Price:</label>
			<input class="form-control" type="text" name="Price" id="Price" value="<?=$model['Price']?>" placeholder="Price" />
			
			<? if(!empty($errors['Price'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Price']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Picture_Url'])) echo 'has-error has-feedback' ?> ">
			<label for="Picture_Url">Picture URL:</label>
			<input class="form-control" type="text" name="Picture_Url" id="Picture_Url" value="<?=$model['Picture_Url']?>" placeholder="Picture URL" />
			
			<? if(!empty($errors['Picture_Url'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Picture_Url']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Description'])) echo 'has-error has-feedback' ?> ">
			<label for="Description">Description:</label>
			<input class="form-control" type="text" name="Description" id="Description" value="<?=$model['Description']?>" placeholder="Description" />
			
			<? if(!empty($errors['Description'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Description']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Catergory_Keyword_id'])) echo 'has-error has-feedback' ?> ">
			<label for="Catergory_Keyword_id">Catergory Keyword ID:</label>
			<!--<input class="form-control" type="text" name="Catergory_Keyword_id" id="Catergory_Keyword_id" value="<?=$model['Catergory_Keyword_id']?>" placeholder="Catergory Keyword ID" />--> 
			<select size="1" class="required form-control" name="Catergory_Keyword_id" id="Catergory_Keyword_id" value="<?=$model['Catergory_Keyword_id']?>">
				<option value="">Select Product Catergory</option>
				<? foreach (Keywords::SelectListFor(5) as $row): ?>
					<option <?if($row['id'] == $model['Catergory_Keyword_id']) echo 'selected'; ?> value="<?=$row['id']?>">
						<?=$row['Name']?>
					</option>
				<? endforeach; ?>
			</select>
			<? if(!empty($errors['Catergory_Keyword_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Catergory_Keyword_id']?></span>
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
	


	