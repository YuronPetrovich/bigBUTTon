<?php

$link = mysqli_connect('localhost','root','', 'bigbutton');

if(mysqli_connect_errno())
{
		echo 'Ошибка подключения к базе даных ('.mysqli_connect_errno().'):' .mysqli_connect_error();
}
?>