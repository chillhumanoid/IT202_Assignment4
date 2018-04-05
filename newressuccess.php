<?php
  session_start();
  include 'include/header2.php';
  $_SESSION['eventCreated'] = FALSE;
  header("refresh:5;url=ecpMain.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creation Success</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <h1>Reservation Created Successfully</h1>
    <p id = "centerMessage">
      You scheduled a(n) <?php echo $_SESSION['eventType']; ?> for <?php echo $_SESSION['eventDate']; ?>
      You will be redirected in 5 seconds
    </p>
  </body>
</html>
