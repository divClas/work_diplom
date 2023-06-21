<?php
require_once 'connect.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `applications` WHERE `id`= '$id'");
echo $id;

// header('Location: ../manager.php');
