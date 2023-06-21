<?php
session_start();
unset($_SESSION['manager']);
header('Location: ../index.php');
