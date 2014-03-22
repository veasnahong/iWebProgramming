	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />

	<h2>
		List of Customer Addresses
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Addresses</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Country</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['Addresses']?></td>
					<td><?=$row['City']?></td>
					<td><?=$row['State']?></td>
					<td><?=$row['Zip']?></td>
					<td><?=$row['Country']?></td>
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