<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Assignment 2 - Jonathan Thorne</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="">
				<table>
					<tr>
						<th colspan="4">Event Center Portal</th>
					</tr>
					<tr>
						<td class = "labels">Customer Name:</td>
						<td colspan="2"><input type="text" name="custName" id="custName"></td>
						<td id ="nameReq">REQUIRED</td>
					</tr>
					<tr>
						<td class="labels">Customer ID:</td>
						<td colspan="2"><input type="password" name="custID" id="custID"></td>
						<td id = "idReq">REQUIRED</td>
					<tr>
						<td class="labels">Customer Email:</td>
						<td colspan="2"><input type="text" name="custEmail" id="custEmail"></td>
						<td id="emailReq"></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="3"><input type="checkbox" name="emailConfirmation" value="email" id="emailConf" onClick="emailReq();">Email me a transaction confirmation</td>
					</tr>
					<tr>
						<td>Select a transaction: <select>
							<option value="reservation">Reservation</option>
							<option value="accInfo">Account Information</option>
							<option value="regAcc">Register/Create Account</option></select></td>
						<td colspan="3"><input type="button" value="Continue" onclick="validateForm();return false"></td>
					</tr>
				</table>
			</form>
		</div>
		<script type="text/javascript" src="scripts/script.js"></script>
		<noscript>
			<h3>This site requires JavaScript</h3>
		</noscript>
	</body>
</html>
