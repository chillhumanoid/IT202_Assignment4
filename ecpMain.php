<?php
	session_start();
	include 'include/header.php';
	if(isset($_POST['continue'])){
		if(isset($_POST['options']) && $_POST['options']==='new'){
			header('Location: https://web.njit.edu/~jgt8/Assignment4/newReservations.php');
			exit;
		}else if(isset($_POST['options']) && $_POST['options']==='view'){
			header('Location: https://web.njit.edu/~jgt8/Assignment4/viewReservations.php');
			exit;
		}
	}else if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header("Location: login.php");
		exit();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Center Portal</title>
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
						<td>
							<input type="submit" name="logout"value="logout" />
						</td>
						<td><input type="submit" name="continue" value="Continue"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
