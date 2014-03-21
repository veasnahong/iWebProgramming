<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of Users
	</h2>
	<a href="?action=new"> Create New </a>
	
	
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>FirstName</th>
					<th>LastName</th>
					<th>Username</th>
					<th>Password</th>
					<th>fbid</th>
					<th>UserType</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<? foreach ($model as $row): ?>
					<tr>
						<td><?=$row['FirstName']?></td>
						<td><?=$row['LastName']?></td>
						<td><?=$row['Username']?></td>
						<td><?=$row['Password']?></td>
						<td><?=$row['fbid']?></td>
						<td><?=$row['UserType_Name']?></td>
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