<html>
<head>
	<title>display bus details</title>
</head>
<body>
	<h2>bus Details</h2>
<table border="2">
	<tr>
		<td>bus id</td>
		<td>bus name</td>
		<td>from</td>
		<td>to</td>
		<td>Avalable Ticket</td>
	</tr>
	<?php
	include('connection.php');
	$records=mysqli_query($con,"select * from admin");
	while($data=mysqli_fetch_array($records))
	{
		?>
		<tr>
			<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['bus_name']; ?></td>
		<td><?php echo $data['from_l']; ?></td>
		<td><?php echo $data['to_l']; ?></td>
		<td><?php echo $data['total_seat'] ?></td>
	    </tr>
	<?php

	}
	?>
</table>
<a href="agent_1.html">back</a>
</body>
</html>