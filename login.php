<?php
	include("include/config.php");
	session_start();
	if(isset($_POST['submit'])){
		$id = mysqli_real_escape_string($db,$_POST['custID']);
		$pass = mysqli_real_escape_string($db,$_POST['custPass']);
		$sql = "SELECT * FROM logins where custID = '$id' AND custPass = '$pass'";
		$result = mysqli_query($db, $sql);
		if($result->num_rows == 0){
			$error_msg = "invalid customer ID or Password";
		}else{
			header('Location: https://web.njit.edu/~jgt8/Assignment2/assignment2.html');
		}
	}else if(isset($_POST['newAccount'])){
		$id = mysqli_real_escape_string($db,$_POST['custID']);
    $pass = mysqli_real_escape_string($db,$_POST['custPass']);

		$sql = "SELECT * FROM logins where custID = '$id'";
		$result = mysqli_query($db,$sql);
		if($result->num_rows == 1){
			$error_msg = "Customer ID taken";
		}else if($result->num_rows == 0){
			$sql = "INSERT INTO logins (custID, custPass) VALUES ($id, '$pass')";
			if (mysqli_query($db, $sql)){
				header('Location: creationsuccess.php');
			}else{
				$error_msg = "Error: " . $sql . "<br>" . mysqli_error($db);
			}
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
						<td colspan="2"><input type="text" name="custID" id="custID" maxlength="8" required></td>
					</tr>
					<tr>
						<td class="labels">Password</td>
						<td colspan="2"><input type="password" name="custPass" id="custPass" maxlength="14" required></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name = "newAccount" value="CREATE NEW ACCOUNT"/>
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
