<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />

=======
	
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
>>>>>>> b14a716ab9c2c548d15fb492bdb9ff1496310377
	<h2>
		List of Customer Addresses
	</h2><br/>
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
				<tr>
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
							<a class="btn btn-sm btn-default glyphicon glyphicon-trash" title="Delete" href="?action=edit&id=<?=$row['id']?>"></a>
						</div>
					</td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>
<<<<<<< HEAD
		<? function JavaScripts(){ ?>
=======
	<? function JavaScripts(){ ?>
>>>>>>> b14a716ab9c2c548d15fb492bdb9ff1496310377
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(function()
			{
				$(".table").dataTable();
			})
		</script>
<<<<<<< HEAD
	<? } ?>
=======
	<? } ?>
>>>>>>> b14a716ab9c2c548d15fb492bdb9ff1496310377
