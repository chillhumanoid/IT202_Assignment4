<?php
	session_start();
	include 'include/header.php';
  include 'include/config.php';
	if(isset($_POST['options']) && $_POST['options']==='view'){
		header('Location: https://web.njit.edu/~jgt8/Assignment4/newReservations.php');
    exit;
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
              <input type ="date" name ="eventDate" />
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
						<td colspan="3"><input class = "buttons" type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
