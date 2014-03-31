	
	<? include '../inc/tableStyle.php';?>		<!-- Table Style-->	
	
	<legend><h2>Edit: <?=$model['UserName']?></h2></legend>
	
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
	<form action="?action=save" method="post" class="my-horizontal">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
			
		<div class="form-group <?if(!empty($errors['Order_id'])) echo 'has-error has-feedback' ?> ">
			<label for="Order_id">Order ID:</label>
			<input class="form-control" type="text" name="Order_id" id="Order_id" value="<?=$model['Order_id']?>" placeholder="Order ID" />
			
			<? if(!empty($errors['Order_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Order_id']?></span>
			<? endif ?>
		</div>
		
		<div class="form-group <?if(!empty($errors['Product_id'])) echo 'has-error has-feedback' ?> ">
			<label for="Product_id">Product ID:</label>
			<input class="form-control" type="text" name="Product_id" id="ContactMethodType" value="<?=$model['Product_id']?>" placeholder="Product ID" /> 
	
			<? if(!empty($errors['Product_id'])): ?>
				<span class="glyphicon glyphicon-remove form-control-feedback"></span>
				<span><?=$errors['Product_id']?></span>
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
	

	