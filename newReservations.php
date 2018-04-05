<?php
	session_start();
	include 'include/header.php';
  include 'include/config.php';
  if(isset($_POST['submit'])){
	   if(isset($_POST['eventType']) && $_POST['eventType'] === ''){
       $error_msg = "Please fill in event type";
	   }else{
       $_SESSION['eventType'] = mysqli_real_escape_string($db,$_POST['eventType']);
       $_SESSION['eventDate'] = mysqli_real_escape_string($db,$_POST['eventDate']);
       $eventType = $_SESSION['eventType'];
       $eventDate = $_SESSION['eventDate'];
       $sup1 = mysqli_real_escape_string($db,$_POST['supplies1']);
       if(empty($sup1)){
         $sup1 = " ";
       }
       $sup2 = mysqli_real_escape_string($db,$_POST['supplies2']);
       if(empty($sup2)){
         $sup2 = " ";
       }
       $sup3 = mysqli_real_escape_string($db,$_POST['supplies3']);
       if(empty($sup3)){
         $sup3 = " ";
       }
       $sup4 = mysqli_real_escape_string($db,$_POST['supplies4']);
       if(empty($sup4)){
         $sup4 = " ";
       }
       $sup5 = mysqli_real_escape_string($db,$_POST['supplies5']);
       if(empty($sup5)){
         $sup5 = " ";
       }
       $id = $_SESSION[id];
       $sql = "SELECT * FROM reservations where custID = '$id'";
       $result = mysqli_query($db, $sql);
      if($result->num_rows >= 5){
        $error_msg = "Max events at a time is 5";
      }else{
				$sql = "INSERT INTO reservations (custID, eventType, date, supplies1, supplies2, supplies3, supplies4, supplies5)
                 VALUES ($id, '$eventType', '$eventDate', '$sup1', '$sup2', '$sup3', '$sup4', '$sup5')";
				if (mysqli_query($db, $sql)){
					$_SESSION['eventCreated'] = TRUE;
				 	header('Location: https://web.njit.edu/~jgt8/Assignment4/newressuccess.php');
				 	exit;
				}else{
					$error_msg = "Error: " . $sql . "<br>" . mysqli_error($db);
	 			}
      }
     }
   }
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>New Rervation - ECP</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="" method="POST">
				<table>
					<tr>
						<th colspan="2">ECP - New Reservation</th>
					</tr>
					<tr>
						<td class = "labels">Event Type:</td>
						<td>
							<select name = "eventType">
                <option value="">
                </option>
                <option value="meeting">
                  Meeting
                </option>
                <option value="conference">
                  Conference
                </option>
                <option value="athletic">
                  Athletic Event
                </option>
                <option value="meet">
                  Meet and Greet
                </option>
                <option value="dinner">
                  Dinner
                </option>
              </select>
						</td>
					</tr>
					<tr>
						<td>Date</td>
						<td>
              <input type ="date" name ="eventDate" required/>
						</td>
					</tr>
          <tr>
            <td class = "labels">
              Supply Slot 1
            </td>
            <td>
              <select name = "supplies1">
                <option value="">
                </option>
                <option value="chairs">
                  Chairs
                </option>
                <option value="tables">
                  Tables
                </option>
                <option value="food">
                  Food
                </option>
                <option value="drink">
                  Drink
                </option>
                <option value="entertainment">
                  Entertainment
                </option>
                <option value="decorations">
                  Decorations
                </option>
              </select>
            </td>
          </tr>
          <tr>
            <td class = "labels">
              Supply Slot 2
            </td>
            <td>
              <select name = "supplies2">
                <option value="">
                </option>
                <option value="chairs">
                  Chairs
                </option>
                <option value="tables">
                  Tables
                </option>
                <option value="food">
                  Food
                </option>
                <option value="drink">
                  Drink
                </option>
                <option value="entertainment">
                  Entertainment
                </option>
                <option value="decorations">
                  Decorations
                </option>
              </select>
            </td>
          </tr>
          <tr>
            <td class = "labels">
              Supply Slot 3
            </td>
            <td>
              <select name = "supplies3">
                <option value="">
                </option>
                <option value="chairs">
                  Chairs
                </option>
                <option value="tables">
                  Tables
                </option>
                <option value="food">
                  Food
                </option>
                <option value="drink">
                  Drink
                </option>
                <option value="entertainment">
                  Entertainment
                </option>
                <option value="decorations">
                  Decorations
                </option>
              </select>
            </td>
          </tr>
          <tr>
            <td class = "labels">
              Supply Slot 4
            </td>
            <td>
              <select name = "supplies4">
                <option value="">
                </option>
                <option value="chairs">
                  Chairs
                </option>
                <option value="tables">
                  Tables
                </option>
                <option value="food">
                  Food
                </option>
                <option value="drink">
                  Drink
                </option>
                <option value="entertainment">
                  Entertainment
                </option>
                <option value="decorations">
                  Decorations
                </option>
              </select>
            </td>
          </tr>
          <tr>
            <td class = "labels">
              Supply Slot 5
            </td>
            <td>
              <select name = "supplies5">
                <option value="">
                </option>
                <option value="chairs">
                  Chairs
                </option>
                <option value="tables">
                  Tables
                </option>
                <option value="food">
                  Food
                </option>
                <option value="drink">
                  Drink
                </option>
                <option value="entertainment">
                  Entertainment
                </option>
                <option value="decorations">
                  Decorations
                </option>
              </select>
            </td>
          </tr>
					<tr>
						<td>
							<input type = "button" value="Back" onclick="window.location.href='https://web.njit.edu/~jgt8/Assignment4/ecpMain.php'"/>
						</td>
						<td colspan="2"><input type="submit" value="Submit" name="submit"/></td>
					</tr>
				</table>
			</form>
      <Center>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error_msg; ?></div>
			</Center>
		</div>
	</body>
</html>
