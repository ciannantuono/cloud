<!DOCTYPE HTML>

<?php
  session_start();

  $username = "user";
  $password = "password";

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location success.php");
  }

  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {

      $_SESSION['logged_in'] = true;
      header("Location: success.php");
    }
  }

?>

<html>
  <head>

    <title> COVID-19 Screening </title>

    <meta charset="UTF-8">
    <meta name = "description" content = "COVID-19">
    <meta name = "keywords" content = "HTML, CSS, XML, JavaScript">
    <meta name = "author" content = "Christian Iannantuono">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>

  </head>
  <body>
    <form method="post" action="index.php">
      Username<br/>
      <input type="text" name="username"><br/>
      Password<br/>
      <input type="password" name="password"><br/>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
