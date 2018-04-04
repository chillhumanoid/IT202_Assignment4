<?php
	include("include/config.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = mysqli_real_escape_string($db,$_POST['custID']);
		$pass = mysqli_real_escape_string($db,$_POST['custPass']);

		$sql = "SELECT * FROM logins where custID = '$id' AND custPass = '$pass'";
		$result = mysqli_query($db, $sql);
		if($result->num_rows == 0){
			$error_msg = "invalid customer ID or Password";
		}else{
			header('Location: https://web.njit.edu/~jgt8/Assignment2/assignment2.html');
		}
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>ECP Login</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="" method="post">
				<table>
					<tr>
						<th colspan="4">Event Center Portal</th>
					</tr>
					<tr>
						<td class = "labels">Customer ID:</td>
						<td colspan="2"><input type="text" name="custID" id="custID" required></td>
					</tr>
					<tr>
						<td class="labels">Password</td>
						<td colspan="2"><input type="password" name="custPass" id="custPass" required></td>
					</tr>
					<tr>
						<td>
							<input type="button" name = "newAccount" value="CREATE NEW ACCOUNT" onclick="createnew.php"/>
						</td>
						<td>
							<input type="submit" name = "submit" value="login" />
						</td>
					</tr>
				</table>
			</form>
			<Center>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error_msg; ?></div>
			</Center>
		</div>
	</body>
</html>
