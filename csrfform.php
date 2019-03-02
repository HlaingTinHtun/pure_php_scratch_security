<?php

require 'app/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form class="" action="delete.php" method="post">
      <input type="submit" name="" value="Delete My Account">
      <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>">
    </form>
  </body>
</html>
