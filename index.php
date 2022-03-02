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
  <input type="text" id="captcha_user" name="captcha_input" placeholder="<?php echo $numOne ." + ". $numTwo; ?>?"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
