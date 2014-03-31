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
				<th>Edit</th>
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