	<h2>
		List of ContactMethods
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Created_At</th>
				<th>Updated_At</th>
				<th>ContactMethodType</th>
				<th>Value</th>
				<th>User_ID</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['created_at']?></td>
					<td><?=$row['updated_at']?></td>
					<td><?=$row['contactMethodType']?></td>
					<td><?=$row['Value']?></td>
					<td><?=$row['User_id']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>