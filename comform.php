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
<h1> book ticket</h1>
<form name="f1" action="2.php" onsubmit="return shiva()" method="POST">
	<p>
		<label> bus id</label>
		<input type="text" id="busid" name="busid"/>
	</p>
	<p>
		<input type="submit" value="submit id"/>
	</p>
</form>
<script type="text/javascript">
	function shiva()
	{
		var id=document.f1.user.value;
	}
</script>
</body>
</html>