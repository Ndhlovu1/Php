<?php

  require_once('Includes/db.inc.php');
  //include 'Includes/db.inc.php';
  require_once('Includes/magicquotes.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/hardcodes.css">
<script>
function myFunction() {
  var key = document.getElementById("password");
  if (key.type === "password") {
    key.type = "text";
  }
  else {
    key.type = "password";
  }
}
</script>

<style>

body{
  background-image: url("Images/_111925035_penguino.jpg ");
}

</style>

</head>
<body>

  <?php
  if(isset($_POST['logging']))

  $email = $_POST['email'];
  $password = $_POST['password'];

  try{
  $sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
  $query = $pdo->prepare($sql);
  $result = $query->exec([$email, $password])

  }
  catch(PDOException $e){

  	$error = 'Error: '.getMessage();
  	include 'error.html.php';
  	exit();
  }

  header('Location: welcome.html.php')
  exit();
  }
  ?>

<center>
<form action="" style="max-width:500px;margin:auto">
  <h1>Login Form</h1>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
<br />
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password" required>
  </div><br />
  <input type="checkbox" onclick="myFunction()">Show Password
  <input type="checkbox" name="rememberme" id="rememberme">
  <label>Remember Me</label><p ></p>
  <button type="submit" class="btn" name="logging">Login</button>
</form><p>
  <a href="?reg" style="padding-left:2px; background-color: grey; color: white">Sign Up</a>
  <a href="?home" style="padding-left:2px; background-color: grey; color: white">Home</a>
</form>


</body>
</html>
