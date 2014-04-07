	
	<?
		@$id = $_REQUEST['id'];
	?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of Orders
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
				<th>Created_At</th>
				<th>Updated_At</th>
				<th>User_ID</th>
				<th>Address_ID</th>
				<th>Edit</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr class="<?=$id==$row['id'] ? "highlighted" : "" ?>">
					<td><?=$row['id']?></td>
					<td><?=$row['created_at']?></td>
					<td><?=$row['updated_at']?></td>
					<td><?=$row['UsersID_Name']?></td>
					<td><?=$row['Address_ID']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-default glyphicon glyphicon-edit" title="Edit" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-eye-open" title="Details" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-trash" title="Delete" href="?action=edit&id=<?=$row['id']?>"></a>
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
			$(".close").click(function(){
			$(this).closest(".alert").slideUp();
			})
			$(".highlighted td").delay(2000).animate({backgroundColor: ""}, 2000)
		})
		</script>
	<? } ?>