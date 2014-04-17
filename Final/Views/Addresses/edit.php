
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	

	<legend>
		 <div class="modal-header">
	        <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
	        <h4 class="modal-title">Edit: <?=$model['UsersID_Name']?> </h4>
	     </div>
    </legend>
	
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form action="?action=save" method="post" class="my-horizontal">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
			
		<div class="form-group <?if(!empty($errors['Users_id'])) echo 'has-error has-feedback' ?> ">
			<label class="control-label" for="Users_id">User ID:</label>
			<input class="form-control" type="text" name="Users_id" id="Users_id" value="<?=$model['Users_id']?>" placeholder="User ID" />
		
			
			<? if(!empty($errors['Users_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Users_id']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['AddressType'])) echo 'has-error has-feedback' ?> ">
			<label for="AddressType">Address Type:</label>
			<!--<input class="form-control" type="text" name="AddressType" id="AddressType" value="<?=$model['AddressType']?>" placeholder="Address Type" />-->
			<select size="1" class="required form-control" name="AddressType" id="UserType" value="<?=$model['AddressType']?>">
				<option value="">Select Address Type</option>
				<? foreach (Keywords::SelectListFor(4) as $row): ?>
					<option <?if($row['id'] == $model['AddressType']) echo 'selected'; ?> value="<?=$row['id']?>">
						<?=$row['Name']?>
					</option>
				<? endforeach; ?>
			</select>
			
			<? if(!empty($errors['AddressType'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['AddressType']?></span>
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
		
		<div class="form-group">
				<!-- <legend> </legend> -->
				<label class="col-md-2 control-label" for="singlebutton">Click Submit:</label>
				<div class="col-md-2">
					  <div class="modal-footer>
						<label class="control-label"></label>
						<input class="btn btn-primary" type="submit" value="Save" />
						<a href="?" data-dismiss="modal">Cancel</a>
				      </div>
				</div>
			</div><br>
	</form>
	<? function JavaScripts(){ global $model; ?>
			<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
			<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
			<script type="text/javascript">
				$(function(){
					$("form").validate();
					$("#AddressType").val(<?=$model['AddressType']?>);
				})
			</script>
		<? } ?>
	
