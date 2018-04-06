<?php
  session_start();
  header("refresh:10;url=viewReservations.php");
  $old = $_SESSION['old'];
  $new = $_SESSION['new'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Success - ECP</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <h1>Reservation Updated Successfully</h1>
    <p class = "centerMessage">
      You will be redirected automatically in 10 seconds</p>
    <p class = "centerMessage">
      Below is a table of your changes
    </p>
    <table>
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
          Supply 1
        </td>
        <td>
          <?php echo $old[0]; ?>
        </td>
        <td>
          <?php echo $new[0]; ?>
        </td>
      </tr>
      <tr>
        <td>
          Supply 2
        </td>
        <td>
          <?php echo $old[1]; ?>
        </td>
        <td>
          <?php echo $new[1]; ?>
        </td>
      </tr>
      <tr>
        <td>
          Supply 3
        </td>
        <td>
          <?php echo $old[2]; ?>
        </td>
        <td>
          <?php echo $new[2]; ?>
        </td>
      </tr>
      <tr>
        <td>
          Supply 4
        </td>
        <td>
          <?php echo $old[3]; ?>
        </td>
        <td>
          <?php echo $new[3]; ?>
        </td>
      </tr>
      <tr>
        <td>
          Supply 5
        </td>
        <td>
          <?php echo $old[4]; ?>
        </td>
        <td>
          <?php echo $new[4]; ?>
        </td>
      </tr>
    </table>
  </body>
</html>
