
	<?
		@$id = $_REQUEST['id'];
	?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />

	<h2>
		List of Customer Addresses
	</h2><br/>
	<style type="text/css">
		body table.table .highlighted td
		{
			background-color: #FFFFAA ;
		}
	</style>
		<? if(isset($_REQUEST['sub_action'])): ?>
			<div class="alert alert-success">
				<a class="close">&times;</a>
					The row has been <?=$_REQUEST['sub_action']?> successfully!
			</div>
		<? endif; ?>
		
	<a href="?action=new"> Create New </a><br/><br/>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>AddressType</th>
				<th>Addresses</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Country</th>
				<th>Edit</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
			
					<tr class="<?=$id==$row['id'] ? "highlighted" : "" ?>">
					<td><?=$row['id']?></td>
					<td><?=$row['UsersID_Name']?></td>
					<td><?=$row['Address_Type']?></td>
					<td><?=$row['Addresses']?></td>
					<td><?=$row['City']?></td>
					<td><?=$row['State']?></td>
					<td><?=$row['Zip']?></td>
					<td><?=$row['Country']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-default glyphicon glyphicon-edit" title="Edit" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-eye-open" title="Details" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-trash" title="Delete" href="?action=delete&format=json&id=<?=$row['id']?>"></a>
						</div>
					</td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>

	<? function JavaScripts(){ ?>
				<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
				<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
				<script type="text/javascript">
				$(function()
				{
					$(".table").dataTable();
					$(".highlighted td").delay(2000).animate({backgroundColor: ""}, 2000)
					$(".close").click(function(){
					$(this).closest(".alert").slideUp();})
					
					$(".glyphicon-trash").click(function(event)
					{
						var that = this;
						event.preventDefault();
						$.get(that.href, function(results)
						{
							if(confirm("Are you sure that you want to delete " + "?"))
							{
								$.post(that.href, function(data){
								if(data.success){
								//msg user success
								//delete row
								alert('Deleted Successfuly');
								$(that).closest('tr').remove();
							}
							else
							{
								//smg user error
								alert(JSON.stringify(data.errors));
							}
						}, 'json');
					}
				},'json')});})
			</script><? } ?>