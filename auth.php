<?php


$login = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$pass = md5($pass);

$mysql = new mysqli('localhost', 'root', 'root', 'guest_book');

$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
count(array($user));


if(is_countable($user) == 0) {
	echo "Incorrect login or password";
	exit();
}

setcookie('user', $user['login'], time() + 3600, "/");

$mysql->close();

header('location: /');

?>