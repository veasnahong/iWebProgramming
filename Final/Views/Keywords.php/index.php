	<h2>
		List of Keywords
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Created_At</th>
				<th>Updated_At</th>
				<th>Parent_ID</th>
				<th>Name</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['created_at']?></td>
					<td><?=$row['updated_at']?></td>
					<td><?=$row['Parent_id']?></td>
					<td><?=$row['Name']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>