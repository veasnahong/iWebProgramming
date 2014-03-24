	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of ContactMethods
	</h2><br/>
	<a href="?action=new"> Create New </a><br/>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>ContactMethodType</th>
				<th>Value</th>
				<th>User_ID</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['Contact_Method_Type']?></td>
					<td><?=$row['Value']?></td>
					<td><?=$row['UsersID_Name']?></td>
					<td><a href="?action=edit&id=<?=$row['id']?>">Edit</a></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>
	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(function()
			{
				$(".table").dataTable();
			})
		</script>
	<? } ?>
