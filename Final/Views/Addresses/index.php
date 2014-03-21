	<h2>
		List of Customer Addresses
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Address Type</th>
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
					<td><?=$row['UsersID_Name']?></td>
					<td><?=$row['AddressType']?></td>
					<td><?=$row['Addresses']?></td>
					<td><?=$row['City']?></td>
					<td><?=$row['State']?></td>
					<td><?=$row['Zip']?></td>
					<td><?=$row['Country']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>