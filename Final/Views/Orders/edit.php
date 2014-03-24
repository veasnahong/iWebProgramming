	
	<form class="form-horizontal" action="?action=save" method="post" id="register-form">
		<fieldset>
			<legend>Insert or Update a new order</legend>
			
			<input type="hidden" name="id" value="<?=$model['id']?>" />
		    
			<div class="form-group">
				<label class="col-md-2 control-label">User ID</label>
				<div class="col-md-4">
					<input type="text" name="User_id" id="User_id" value="<?=$model['User_id']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Address ID</label>
				<div class="col-md-4">
					<input type="text" name="Address_id" id="Address_id" value="<?=$model['Address_id']?>"class="form-control input-md"/>
				</div>
			</div>
				
				
			<div class="form-group">
				<legend> </legend>
				<label class="col-md-2 control-label" for="singlebutton">Click Submit </label>
				<div class="col-md-2">
					<button id="Save" name="Save" value="Save" class="btn btn-primary">Submit</button>
				</div>
			</div>
			
		</fieldset>
	</form></br>
	
	<!--<pre>
		<? print_r($_GET); ?>
		<? print_r($_POST); ?>
	</pre> -->
	