<?php
	session_start();
	include 'include/header.php';
	include 'include/config.php';
  $title = "Change Reservation - ECP";
  $i = $_SESSION[test];
  $id = $_SESSION[id];
  $sql = "SELECT * FROM reservations WHERE resNumber = '$i' AND custID = '$id'";
  $results = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($results);
  $eventType = $row['eventType'];
  $eventDate = $row['date'];
  $sup1o = $row['supplies1'];
  $sup2o = $row['supplies2'];
  $sup3o = $row['supplies3'];
  $sup4o = $row['supplies4'];
  $sup5o = $row['supplies5'];
  if(isset($_POST['test'])){
    $sup1 = mysqli_real_escape_string($db,$_POST['suppl1']);
    if(empty($sup1)){
      $sup1 = $sup1o;
    }
    $sup2 = mysqli_real_escape_string($db,$_POST['suppl2']);
    if(empty($sup2)){
      $sup2 = $sup2o;
    }
    $sup3 = mysqli_real_escape_string($db,$_POST['suppl3']);
    if(empty($sup3)){
      $sup3 = $sup3o;
    }
    $sup4 = mysqli_real_escape_string($db,$_POST['suppl4']);
    if(empty($sup4)){
      $sup4 = $sup4o;
    }
    $sup5 = mysqli_real_escape_string($db,$_POST['suppl5']);
    if(empty($sup5)){
      $sup5 = $sup5o;
    }
    $sql = "UPDATE reservations SET supplies1 = '$sup1', supplies2 = '$sup2', supplies3 = '$sup3', supplies4 = '$sup4', supplies5 = '$sup5' WHERE resNumber = '$i' AND custID = '$id'";
    if(mysqli_query($db, $sql)){
      $title = "SUCCESS";
      $old = array($sup1o, $sup2o, $sup3o, $sup4o, $sup5o);
      $_SESSION['old'] = $old;
      $new = array($sup1, $sup2, $sup3, $sup4, $sup5);
      $_SESSION['new'] = $new;
      header("Location: https://web.njit.edu/~jgt8/Assignment4/updateSuccess.php");
      exit;
    }else{
      $error_msg = "Could not update data - " . mysqli_error($db);
    }
  }
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Change Reservation</title>
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div id = "main">
			<form action="" method="post">
				<table>
          <tr>
            <th colspan="3">
              <?php echo $title ?>
            </th>
          </tr>
          <tr>
            <th>

            </th>
            <th>
              Old
            </th>
            <th>
              New
            </th>
          </tr>
          <tr>
            <td>
              Event Type
            </td>
            <td>
              <?php echo $eventType ?>
            </td>
            <td>
              <?php echo $eventType ?>
            </td>
          </tr>
          <tr>
            <td>
              Event Date
            </td>
            <td>
              <?php echo $eventDate ?>
            </td>
            <td>
              <?php echo $eventDate ?>
            </td>
          </tr>
          <tr>
            <td>
              Supply Slot 1
            </td>
            <td>
              <?php echo $sup1o ?>
            </td>
            <td>
              <select name = "suppl1">
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
              Supply Slot 2
            </td>
            <td>
              <?php echo $sup2o ?>
            </td>
            <td>
              <select name = "suppl2">
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
              Supply Slot 3
            </td>
            <td>
              <?php echo $sup3o ?>
            </td>
            <td>
              <select name = "suppl3">
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
              Supply Slot 4
            </td>
            <td>
              <?php echo $sup4o ?>
            </td>
            <td>
              <select name = "suppl4">
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
              Supply Slot 5
            </td>
            <td>
              <?php echo $sup5o ?>
            </td>
            <td>
              <select name = "suppl5">
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
            <td><input type = "button" value="Cancel" onclick="window.location.href='https://web.njit.edu/~jgt8/Assignment4/viewReservations.php'"/></td>
            <td></td>
            <td><input type="submit" name="test" value="Submit"></td>
          </tr>
        </table>
      </form>
      <Center>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error_msg; ?></div>
			</Center>
    </body>
  </div>
</html>
