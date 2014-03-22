		
<!--	<form action="?action=save" method="post">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		<label for="FirstName">First Name:</label>
		<input type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" />
		<br />
		<label for="LastName">Last Name:</label>
		<input type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" />
		<br />
		<label for="Password">Password:</label>
		<input type="password" name="Password" id="Password" value="<?=$model['Password']?>" />
		<br />
		<label for="fbid">fbid:</label>
		<input type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" />
		<br />
		<label for="UserType">User Type:</label>
		<input type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>" />
		<br />
		<input type="submit" value="Save" />
	</form> -->



	
	<form class="form-horizontal" action="?action=save" method="post" id="register-form">
		<fieldset>
			<legend>Register</legend>
			
			<input type="hidden" name="id" value="<?=$model['id']?>" />
			
			<div class="form-group">
				<label class="col-md-2 control-label" for="first">First Name</label>
           	   	<div class="col-md-4">
					<input type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>"class="form-control input-md" />
            	</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label" for="last">Last Name</label>
           	   	<div class="col-md-4">
					<input type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" class="form-control input-md"/>
            	</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label" for="username">Username</label>
				<div class="col-md-4">
					<input type="text" name="Username" id="Username" value="<?=$model['Username']?>" class="form-control input-md" />
				</div>
		</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label" for="password">Password</label>
				<div class="col-md-4">
					<input type="password" name="Password" id="Password" value="<?=$model['Password']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<!--<div class="form-group">
				<label class="col-md-2 control-label" for="password2">Repeat Password</label>
				<div class="col-md-4"><input id="RepeatPassword" name="RepeatPassword" type="password" placeholder="Repeat Password" class="form-control input-md register-password-field"></div>
			</div>-->
			
			<div class="form-group">
				<label class="col-md-2 control-label" for="FacebookID">Facebook ID</label>
				<div class="col-md-4">
					<input type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" class="form-control input-md" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Select User Type</label>
		     	<div class="col-md-4">
		     		
			    	<select class="form-control"class="col-md-4" input id="UserType" name="UserType" type="text" value="<?=$model['UserType']?>">
					      <option>6</option>
						  <option>7</option>
						  <option>8</option>
						  <option>9</option>
					
						 <!-- <option>Admin</option>
						  <option>User</option>
						  <option>Employee</option>
						  <option>Customer</option>
						  <option>Supplier</option>-->
		     </select> 
	       	</div> 
		    </div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="singlebutton">Click Submit </label>
				<div class="col-md-2">
					<button id="Save" name="Save" value="Save" class="btn btn-primary">Submit</button>
				</div>
			</div>
			
		</fieldset>
	</form>
</br>

<!--<pre>
		<? print_r($_GET); ?>
		<? print_r($_POST); ?>
	</pre> -->
	