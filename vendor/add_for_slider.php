<?php
require_once 'connect.php';
$id = $_POST['id'];
$img = $_FILES['img'];
// $discription = $_POST['discription'];
$path = '../uploads/' . time() . $_FILES['img']['name'];
if (move_uploaded_file($_FILES['img']['tmp_name'], '../uploads/' . $path)) {
    move_uploaded_file($_FILES['img']['tmp_name'], '../uploads/' . $path);
    mysqli_query($connect, "INSERT INTO `slider`(`id`, `img`)
 VALUES(NULL, '$path' )")
    ;
} else {
    $_SESSION['error'] = 'Ошибка с загрузкой изображения';
}

header('Location: ../admin.php');
// print_r($id);
// print_r($path);
// print_r($discription);