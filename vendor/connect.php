<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'adminka007');
if (!$connect) {
    die('Error connect to DataBase');
}
