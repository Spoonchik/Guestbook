<?php

$login = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 15) {
	echo "ERROR";
	exit();
} 

$pass = md5($pass);

$mysql = new mysqli('localhost', 'root', 'root', 'guest_book');
$mysql->query("INSERT INTO `user` (`login`, `email`, `pass`) VALUES('$login', '$email', '$pass')");

$mysql->close();

header('location: /');

?>	