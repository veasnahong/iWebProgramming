	
	<form action="?action=save" method="post">
		<label for="FirstName">First Name:</label>
		<input type="text" name="FirstName" id="FirstName" />
		<br />
		<label for="LastName">Last Name:</label>
		<input type="text" name="LastName" id="LastName" />
		<br />
		<label for="Password">Password:</label>
		<input type="password" name="Password" id="Password" />
		<br />
		<label for="fbid">fbid:</label>
		<input type="text" name="fbid" id="fbid" />
		<br />
		<label for="UserType">User Type:</label>
		<input type="text" name="UserType" id="UserType" />
		<br />
		<input type="submit" value="Save" />
	</form>
	
	<pre>
		<? print_r($_GET); ?>
		<? print_r($_POST); ?>
	</pre>