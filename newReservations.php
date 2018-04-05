<?php
	session_start();
	include 'include/header.php';
	if(isset($_POST['options']) && $_POST['options']==='view'){
		header('Location: ')
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>newReservations</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="" method="POST">
				<table>
					<tr>
						<th colspan="2">Event Center Portal</th>
					</tr>
					<tr>
						<td class = "labels">Customer ID:</td>
						<td>
							<?php echo $_SESSION[id]; ?>
						</td>
					</tr>
					<tr>
						<td>Select a transaction:</td>
						<td>
						<select name = "options">
							<option value="view">View Reservation</option>
							<option value="new">New Reservations</option>
						</td>
					</tr>
					<tr>
						<td colspan="3"><input class = "buttons" type="submit" value="Continue"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
