	
	<form class="form-horizontal" action="?action=save" method="post" id="register-form">
		<fieldset>
			<legend>Insert or Update a new addresses</legend>
			
			<input type="hidden" name="id" value="<?=$model['id']?>" />
		    
			<div class="form-group">
				<label class="col-md-2 control-label">Address</label>
				<div class="col-md-4">
					<input type="text" name="Addresses" id="Addresses" value="<?=$model['Addresses']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">City</label>
				<div class="col-md-4">
					<input type="text" name="City" id="City" value="<?=$model['City']?>"class="form-control input-md"/>
				</div>
			</div>
				
			<div class="form-group">
				<label class="col-md-2 control-label">State</label>
				<div class="col-md-4">
					<input type="text" name="State" id="State" value="<?=$model['State']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Zip Code</label>
				<div class="col-md-4">
					<input type="text" name="Zip" id="Zip" value="<?=$model['Zip']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Country</label>
				<div class="col-md-4">
					<input type="text" name="Country" id="Country" value="<?=$model['Country']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">User ID</label>
				<div class="col-md-4">
					<input type="text" name="Users_id" id="Users_id" value="<?=$model['Users_id']?>"class="form-control input-md"/> 
					<!--<select class="form-control"class="col-md-4" input id="Users_id" name="Users_id" type="text" value="<?=$model['Users_id']?>">
					      <option>6</option>
						  <option>7</option>
						  <option>8</option>
						  <option>9</option>
						  <option>10</option>
		     </select> -->
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Address Type</label>
				<div class="col-md-4">
					<!--<input type="text" name="AddressType" id="AddressType" value="<?=$model['AddressType']?>"class="form-control input-md"/> -->
						<select class="form-control"class="col-md-4" input id="AddressType" name="AddressType" type="text" value="<?=$model['AddressType']?>">
					      <option>14</option>
						  <option>15</option>
						  <option>16</option>
		     			</select> 
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
	