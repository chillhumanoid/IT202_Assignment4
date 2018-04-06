<?php
	session_start();
	include 'include/header.php';
	include 'include/config.php';
	include 'incldue/changeRes.php';
	$id = $_SESSION[id];
	$sql = "SELECT * FROM reservations WHERE custID = '$id' ORDER by resNumber";
	$result = mysqli_query($db,$sql);

	echo "
	<table border='1'>
	<tr>
	<th colspan = '9'>ID: ". $_SESSION[id] ." - Reservations - ECP
	</th>
	</tr>
	<tr>
	<th>#</th>
	<th>Event Type</th>
	<th>Event Date</th>
	<th>Supply 1</th>
	<th>Supply 2</th>
	<th>Supply 3</th>
	<th>Supply 4</th>
	<th>Supply 5</th>
	</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['resNumber'] . "</td>";
	echo "<td>" . $row['eventType'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo "<td>" . $row['supplies1'] . "</td>";
	echo "<td>" . $row['supplies2'] . "</td>";
	echo "<td>" . $row['supplies3'] . "</td>";
	echo "<td>" . $row['supplies4'] . "</td>";
	echo "<td>" . $row['supplies5'] . "</td>";
	echo "</tr>";
	$n = $row[resNumber];
}
echo "</table>";
if(isset($_POST['edit'])){
	$_SESSION['test'] = mysqli_real_escape_string($db,$_POST['editRow']);
  header("Location: https://web.njit.edu/~jgt8/Assignment4/changeRes.php");
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Center Portal</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>
		<form action="" method="POST">
			<table>
				<tr>
					<td>
						<input type = "button" value="Back" onclick="window.location.href='https://web.njit.edu/~jgt8/Assignment4/ecpMain.php'"/>
					</td>
					<td>
						Row:
						<select name = "editRow">
						  <?php
						    for ($i=1; $i<=$n; $i++){
						  ?>
						  <option value="<?php echo $i;?>"><?php echo $i;?></option>
						  <?php
						  }
						  ?>
						</select>
						<input type = "submit" value="Edit" name="edit" />
					</td>
				</tr>
		</table>
	</form>
</html>
