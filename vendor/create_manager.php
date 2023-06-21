<?php
session_start();
require_once 'connect.php';
$name_manger = $_POST['name_manger'];
$login = $_POST['login'];
$password = $_POST['password'];
$role = 'manager';

///ПРОВЕРКА НА ЛОГИН 
$query = "SELECT * FROM `administration` WHERE `login` = '$login'";
$result = mysqli_query($connect, $query);
if ($result->num_rows > 0) {
	$_SESSION["error"] = 'Пользователь с таким логином уже существует';
	return header("Location:../admin.php");
}
///ПРОВЕРКА НА ПАРОЛЬ 
$query = "SELECT * FROM `administration` WHERE `password` = '$password'";
$result = mysqli_query($connect, $query);
if ($result->num_rows > 0) {
	$_SESSION["error"] = 'Пользователь с таким паролем уже существует';
	return header("Location:../admin.php");
}
mysqli_query($connect, "INSERT INTO `administration` (`id`, `name_manger`, `login`, `password`,`role`)
    VALUES(NULL,'$name_manger','$login','$password','$role')");
return header('Location:../admin.php');
?>