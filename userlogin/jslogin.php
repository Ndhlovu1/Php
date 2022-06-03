<?php

//connect to db
include_once 'Includes/db.inc.php';
require_once ('Includes/magicquotes.inc.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$query = $pdo->prepare($sql);
$result = $query->execute([$email, $password]);

if ($result) {
  $user = $query->$pdofetch(PDO::FETCH_ASSOC);
    if($query->rowCount() > 0){
      echo "1";
    }
      else {
        echo "Error.";
      }
  }

else {
  echo "Error encountered";
}




?>
