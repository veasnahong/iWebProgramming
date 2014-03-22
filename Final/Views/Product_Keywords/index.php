	<h2>
		List of Product Keywords
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Created_At</th>
				<th>Updated_At</th>
				<th>Product_ID</th>
				<th>Keyword_ID</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['created_at']?></td>
					<td><?=$row['updated_at']?></td>
					<td><?=$row['Product_id']?></td>
					<td><?=$row['Keyword_id']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>