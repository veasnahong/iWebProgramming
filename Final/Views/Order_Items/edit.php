	
	<form class="form-horizontal" action="?action=save" method="post" id="register-form">
		<fieldset>
			<legend>Insert or Update a new order items</legend>
			
			<input type="hidden" name="id" value="<?=$model['id']?>" />
		    
			<div class="form-group">
				<label class="col-md-2 control-label">Order ID</label>
				<div class="col-md-4">
					<input type="text" name="Order_id" id="Order_id" value="<?=$model['Order_id']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Product ID</label>
				<div class="col-md-4">
					<input type="text" name="Product_id" id="Product_id" value="<?=$model['Product_id']?>"class="form-control input-md"/>
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
	