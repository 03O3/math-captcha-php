<?php

session_start();

$numOne = rand(1, 9);

$numTwo = rand(1, 9);

$_SESSION['captcha'] = [
    "numOne" => $numOne,
    "numTwo" => $numTwo
];

?>



<!DOCTYPE html>
<html>
<body>

<h1>Test captcha</h1>

<form action="vendor/captcha_handler.php" method="POST">
  <label for="captcha_server"><?php echo $numOne ." + ". $numTwo; ?>?</label><br>
  <input type="text" id="captcha_user" name="captcha_input"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>