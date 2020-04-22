<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Automated Attendance Application">
  <meta name="keywords" content="Attendance, Automated">
  <meta name="author" content="Nick Stose">
  <title>AutoAttend</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <img src="img\AutoAttendLogo.png" alt="AutoAttend Logo">
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="login.php">Teacher</a></li>
        </ul>
    </div>
  </header>
    <div>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to AutoAttend.</h1>
    <p>
        <a href="attendancedashboard.php">View Attendance Dashboard</a><br>
        <a href="addstudent.php">Register Students to your class</a><br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a><br>
    </p>
    </div>
    <footer><p>Created by Nick Stose, Martin Dewit and Liz Flick</p></footer>
</body>
</html>
