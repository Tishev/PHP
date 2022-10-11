<?php
require_once 'models/User.php';
session_start();
$pageHeader = 'Добро пожаловать в TODO';

//Получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
}

include "view/index.php";