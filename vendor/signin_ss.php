<?php
require_once('connect.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$res = mysqli_query($connect, "SELECT * FROM `administration` WHERE `login`='$login' AND `password` = '$password'");
if(mysqli_num_rows($res)==1){
    $manager = mysqli_fetch_assoc($res);
    $_SESSION['manager'] = [
        "id" => $manager['id'],
        "name_manger" => $manager['name_manger'],
        "login" => $manager['login'],
        "password" => $manager['password'],
        "role" => $manager['role'],
    ];
    header("Location: ../".$_SESSION['manager']['role'].".php"); 
    
    print_r($_SESSION['manager']);
}
else{
    $_SESSION["error"]='Не верный логин или пароль';
    header("Location: ../signin.php");
}