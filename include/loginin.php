<?php
session_start();
require_once'db.php';


$login = $_POST['login'];
$password = md5($_POST['password']);



$check_user = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND pass = '$password'");

 if (mysqli_num_rows($check_user) > 0 ){

 		$user = mysqli_fetch_assoc($check_user);

 		$_SESSION['user'] = [
 			"id" => $user['id'],
 			"login" => $user['login'],
 			"role_id" => $user['role_id']
 		];
 		header('Location: ../index.php');

 }else {

 	$_SESSION['message'] = 'Неверный логин или пароль';
	header('Location: ../index.php');
 }
