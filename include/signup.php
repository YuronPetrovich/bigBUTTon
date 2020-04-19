<?php
session_start();
require_once'db.php';



$login = $_POST['login'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$_SESSION['message'] = ' ';


if($password1 === $password2){

	$password1 = md5($password1);

	mysqli_query($link, "INSERT INTO `users`	 (`id`, `login`, `pass`, `role_id`)	  VALUES 	  (NULL, '$login', '$password1', '3')");

		$_SESSION['message'] = 'Регистрация прошла успешно';
	header('Location: ../index.php');

} else {
	$_SESSION['message'] = 'Пароли не совпадают';
	header('Location: ../registration.php');
}


?>
