<?php

// $date = new DateTime('+1 week');
// setcookie('session','abc',$date->getTimestamp());
//this can be able to see the codes of the db.php file if the file extension is not php extension.
//this will not compile. eg. db.inc
require 'app/db.php';

if (!isset($_GET['username'])) {
  die();
}

$user = $db->prepare("SELECT * FROM user WHERE username = :username");

$user->execute([
  'username'=>$_GET['username'],
]);

$user = $user->fetchObject();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Profile</title>
  </head>
  <body>
    <h2><?php echo htmlspecialchars($user->username,ENT_QUOTES, 'UTF-8'); ?></h2>
    <p><?php echo htmlspecialchars($user->bio,ENT_QUOTES, 'UTF-8'); ?></p>
  </body>
</html>
