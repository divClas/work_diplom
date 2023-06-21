<?php
require_once 'connect.php';
$filter = $_POST['filter'];
$applications;
switch ($filter) {
    case 'новая заявка':
        $applications = mysqli_query($connect, "SELECT * FROM `applications` WHERE `stage` = '$filter'");
        break;
    case 'все заявки':
        $applications = mysqli_query($connect, "SELECT * FROM `applications`");
        break;
    case 'Клиент согласился':
        $applications = mysqli_query($connect, "SELECT * FROM `applications` WHERE `stage` = '$filter'");
        break;
    case 'Клиент Отказался':
        $applications = mysqli_query($connect, "SELECT * FROM `applications` WHERE `stage` = '$filter'");
        break;
    case 'Клиент думает':
        $applications = mysqli_query($connect, "SELECT * FROM `applications` WHERE `stage` = '$filter'");
        break;
    default:
        break;
}

$applications = mysqli_fetch_all($applications, MYSQLI_ASSOC);
foreach ($applications as $applications) {
    echo '<div  class="flex_item2">';
    echo '<div id="aplication_'.$applications['id'].'" class="items_manager">';
    echo '<div class="line3">' . $applications['name'] . '</div>';
    echo '<div class="line3">' . $applications['number'] . '</div>';
    echo '<div class="line3"><a id="link_app">' . $applications['link'] . '</a></div>';
    echo '<div class="line3">' . $applications['list'] . '</div>';
    echo '<div class="line3">' . $applications['discription'] . '</div>';
    echo '<div class="line3">' . $applications['stage'] . '</div>';
    echo '<div class="line3 redact"><a onclick="deleteAplication('.$applications['id'].')" class="redact" id="delete">УДАЛИТЬ ЗАЯВКУ</a></div>';
    echo '<div class="line3 redact"><a class="redact" href="update.php?id=' . $applications['id'] . '">UPDATE</a></div>';
    echo '</div>';
    echo '</div>';

}