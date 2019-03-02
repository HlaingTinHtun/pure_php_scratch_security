<?php
  require 'app/db.php';

  if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $user = $db->prepare("SELECT * FROM user WHERE email = :email");

    $user->execute([
      'email' => $email,
    ]);

    // $user = $db->query("SELECT * FROM user WHERE email = '{$email}'");//weak statement that can make sql injections

    if ($user->rowCount()) {
      die('Send Email');
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Pw</title>
  </head>
  <body>
    <form class="" action="sqlinjection.php" method="post">
      <label for="email">email
        <input type="text" name="email" value="">
      </label>
      <input type="submit" name="" value="Recover">
    </form>
  </body>
</html>
