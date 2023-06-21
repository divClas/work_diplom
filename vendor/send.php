<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$number = $_POST['number'];
$link = $_POST['link'];
$list = $_POST['list'];
$discription = $_POST['discription'];
$stage = 'новая заявка';
    mysqli_query($connect, "INSERT INTO `applications` (`id`, `name`,`number`, `link`, `list`, `discription`, `stage`)
    VALUES(NULL,'$name','$number','$link','$list', '$discription','$stage')");

