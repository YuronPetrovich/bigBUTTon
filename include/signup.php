<?php
session_start();
require_once'db.php';



$login = $_POST['login'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$_SESSION['message'] = ' ';


if(strlen($login)<4){
$_SESSION['message'] = 'login must contain more than 4 characters';
	header('Location: ../registration.php');
}elseif (strlen($password1)<4 || strlen($password2)<4)
	{
$_SESSION['message'] = 'password must contain more than 4 characters';
	header('Location: ../registration.php');
}else{








$check_user = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' ");

 if (mysqli_num_rows($check_user) > 0 ){

 		 	$_SESSION['message'] = 'Username "'.$login.'" is not available.';
	header('Location: ../registration.php');

 }else {

 	if($password1 === $password2){

	$password1 = md5($password1);

	mysqli_query($link, "INSERT INTO `users`	 (`id`, `login`, `pass`, `role_id`)	  VALUES 	  (NULL, '$login', '$password1', '3')");

		$_SESSION['message'] = 'registration completed successfully';
	header('Location: ../index.php');

} else {
	$_SESSION['message'] = 'Passwords are not the same';
	header('Location: ../registration.php');
}

 }

}




?>
