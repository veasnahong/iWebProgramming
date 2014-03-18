		
	<form action="?action=save" method="post">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		
		<label for="Name">Supplier ID:</label>
		<input type="text" name="Suplier_id" id="Suplier_id" value="<?=$model['Suplier_id']?>" />
		<br />
		<label for="Name">Name:</label>
		<input type="text" name="Name" id="Name" value="<?=$model['Name']?>" />
		<br />
		<label for="LastName">Price:</label>
		<input type="text" name="Price" id="Price" value="<?=$model['Price']?>" />
		<br />
		<label>Picture_URL:</label>
		<input type="text" name="Picture_Url" id="Picture_Url" value="<?=$model['Picture_Url']?>" />
		<br />
		<label>Description:</label>
		<input type="text" name="Description" id="Description" value="<?=$model['Description']?>" />
		<br />
		<label>Catergory Keyword:</label>
		<input type="text" name="Catergory_Keyword_id" id="Catergory_Keyword_id" value="<?=$model['Catergory_Keyword_id']?>" />
		<br />
	
		<input type="submit" value="Save" />
	</form>



	
	<!--<form class="form-horizontal" action="?action=save" method="post" id="register-form">
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
			
	<!--		<div class="form-group">
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
						  <option>Supplier</option>
		     </select> -->
<!--	       		</div> 
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
	<pre>
		<? print_r($_GET); ?>
		<? print_r($_POST); ?>
	</pre>
	