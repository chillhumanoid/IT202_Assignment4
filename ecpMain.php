<?php
	session_start();
	include 'include/header.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Center Portal</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="">
				<table>
					<tr>
						<th colspan="2">Event Center Portal</th>
					</tr>
					<tr>
						<td class = "labels">Customer ID:   <?php echo $_SESSION[id]; ?></td>
					</tr>
					<tr>
						<td>Select a transaction: <select>
							<option value="reservation">Reservation</option>
							<option value="accInfo">Account Information</option>
							<option value="regAcc">Register/Create Account</option></select></td>
					</tr>
					<tr>
						<td colspan="3"><input type="button" value="Continue" onclick=""></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
