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
	$id = $_POST['busid']; 
	$records=mysqli_query($con,"select * from admin where id='$id'");
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
<form name="f1" action="authentication3.php" onsubmit="return shiva()" method="POST">
	<p>
		<label> enter id</label>
		<input type="text" id="busid" name="busid"/>
	</p>
	<p>
		<label> enter no of tickets</label>
		<input type="text" id="tickets" name="tickets"/>
	</p>
	<p>
		<input type="submit" value="submit"/>
	</p>
</form>
<script type="text/javascript">
	function shiva()
	{
		var busid=document.f1.busid.value;
		var tickets=document.f1.tickets.value;
	}
</script>
</body>
</html>