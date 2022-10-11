<?php
require_once 'models/UserProvider.php';

session_start();

$pdo = require 'db.php'; // Подключим PDO
$error = null;

//действие разлогиниться
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    session_destroy();
    header("Location: index.php");
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $user->getId();
        header("Location: index.php");
        die();
    }
}

include "view/signin.php";