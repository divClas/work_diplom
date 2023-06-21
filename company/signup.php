<?php
	require_once('connect.php');
	session_start();
    // Получаем данные из формы
    $username = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
    $password = $_POST['password'];
	$password_r = $_POST['password_r'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];

	if ($password!=$password_r) {
		$_SESSION["error"]='Пароли не совпадаюn';
		header("Location:../reg.php");
	}
	// Пользователь с таким email уже существует
	$query = "SELECT * FROM `users` WHERE `phone` = '$phone'";
	$result = mysqli_query($connect,$query);
	if ($result->num_rows > 0) {
		$_SESSION["error"]='Пользователь с таким телфоном уже существует';
		header("Location:../reg.php");
	}
	// Пользователь с таким email уже существует
	$query = "SELECT * FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($connect,$query);
	if ($result->num_rows > 0) {
		$_SESSION["error"]='Пользователь с таким email уже существует';
		header("Location:../reg.php");
	}
	// Проверяем, существует ли уже пользователь с таким логином
	$query = "SELECT * FROM `users` WHERE `login` = '$login'";
	$result = mysqli_query($connect,$query);
	if ($result->num_rows > 0) {
		$_SESSION["error"]='Пользователь с таким логином уже существует';
		header("Location:../reg.php");
	} 	
	// Добавляем пользователя в базу данных
	$query = "INSERT INTO `users`(`id`, `name`, `surname`, `login`, `email`, `phone`, `password`) 
	VALUES (NULL,'$username','$surname','$login','$email','$phone','$password')";
	mysqli_query($connect,$query);
	// Выводим сообщение об успешной регистрации
	$_SESSION["error"]='Вы успешно зарегистрировались';
	header("Location:../login.php");

