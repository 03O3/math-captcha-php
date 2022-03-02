<?php

session_start();

$user_input = $_POST['captcha_input'];

$answer_captcha = $_SESSION['captcha']['numOne'] + $_SESSION['captcha']['numTwo'];

if ($user_input ==  $answer_captcha){
    echo "Captcha success!";
} else {
    echo "Captcha failed";
}



?>