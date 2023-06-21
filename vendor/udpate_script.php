<?php
session_start();
require_once 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$number = $_POST['number'];
$link = $_POST['link'];
$list = $_POST['list'];
$discription = $_POST['discription'];
$stage = $_POST['stage'];
    mysqli_query($connect, "UPDATE `applications` SET `name`='$name', `number`='$number',
    `link`='$link', `list`='$list', `discription`='$discription',
    `discription`='$discription', `stage`='$stage' WHERE `id`='$id'");
header('Location:../manager.php');

