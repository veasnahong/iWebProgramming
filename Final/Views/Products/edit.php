		
<!--	<form action="?action=save" method="post">
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
</form> -->



	
	<form class="form-horizontal" action="?action=save" method="post" id="register-form">
		<fieldset>
			<legend>Insert and Update Products</legend>
			
			<input type="hidden" name="id" value="<?=$model['id']?>" />
			
			<div class="form-group">
				<label class="col-md-2 control-label">Supplier ID</label>
		     	<div class="col-md-4">
			    	<select class="form-control"class="col-md-4" input id="Suplier_id" name="Suplier_id" type="text" value="<?=$model['Suplier_id']?>">
					      <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
					</select> 
	       		</div> 
		    </div>
		    
			<div class="form-group">
				<label class="col-md-2 control-label">Name</label>
           	   	<div class="col-md-4">
					<input type="text" name="Name" id="Name" value="<?=$model['Name']?>"class="form-control input-md" />
            	</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Price</label>
           	   	<div class="col-md-4">
					<input type="text" name="Price" id="Price" value="<?=$model['Price']?>" class="form-control input-md"/>
            	</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Picture URL</label>
				<div class="col-md-4">
					<input type="text" name="Picture_Url" id="Picture_Url" value="<?=$model['Picture_Url']?>" class="form-control input-md" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-4">
					<input type="text" name="Description" id="Description" value="<?=$model['Description']?>"class="form-control input-md"/>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Catergory_Keyword_id</label>
		     	<div class="col-md-4">
			    	<select class="form-control"class="col-md-4" input id="Catergory_Keyword_id" name="Catergory_Keyword_id" type="text" value="<?=$model['Catergory_Keyword_id']?>">
					      <option>17</option>
						  <option>18</option>
						  <option>19</option>
						  <option>20</option>
						  <option>21</option>
						  <option>22</option>
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
	</form></br>
	
	<!--<pre>
		<? print_r($_GET); ?>
		<? print_r($_POST); ?>
	</pre> -->
	