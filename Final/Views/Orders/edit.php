
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
	<legend>
		<div class="modal-header">
	        <a href="?" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
	        <h4 class="modal-title">Edit: <?=$model['UsersID_Name']?></h4>
	     </div>
     </legend>
	
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
					$("#UserType").val(<?=$model['UserType']?>);
				})
			</script>
		<? } ?>
