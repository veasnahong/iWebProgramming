	<h2>
		List of Products
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Suplier_id</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Picture_Url</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['Suplier_id']?></td>
					<td><?=$row['Name']?></td>
					<td><?=$row['Price']?></td>
					<td><?=$row['Description']?></td>
					<td><?=$row['Picture_Url']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>