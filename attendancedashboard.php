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
    <div class="page-header">
        <h1>Showing class attendance for: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
      <iframe style="width:100%" height="800" frameborder="0" scrolling="no" src="https://mailuc-my.sharepoint.com/personal/stosenm_mail_uc_edu/_layouts/15/Doc.aspx?sourcedoc={a524b6f5-732e-448d-8600-0374da470d83}&action=embedview&wdDownloadButton=True&wdInConfigurator=True"></iframe>
    </div>

</table>
<footer><p>Created by Nick Stose, Martin Dewit and Liz Flick</p></footer>
</body>
</html>
