	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of Order Items
	</h2><br/>
		<a href="?action=new"> Create New </a><br/><br/>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Order_ID</th>
				<th>Product_ID</th>
				<th>Users_ID</th>
				<th>UserName</th>
				<th>ProductName</th>
				<th>Edit</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['Order_id']?></td>
					<td><?=$row['Product_id']?></td>
					<td><?=$row['Users_ID']?></td>
					<td><?=$row['UserName']?></td>
					<td><?=$row['ProductName']?></td>
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