<?php
require_once 'connect.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `administration` WHERE `id`='$id' ");
//  header('Location: ../admin.php');

