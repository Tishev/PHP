<?php
include_once "models/Task.php";
include_once "models/TaskProvider.php";
include_once "models/User.php";

$pdo = require 'db.php';

session_start();

$pageHeader = "Задачи";

//Получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    //Перенаправим на главную если пользователь не залогинен
    header("Location: /");
    die();
}
$taskProvider = new TaskProvider($pdo);

$user_id = $_SESSION['id'] ?? null;

//Сделаем метод добавления новой задачи и сохранения ее в сессии
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task(null, $taskText), $user_id);
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key, $user_id);
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'apidone') {
    $task_id = $_GET['id'] ?? null;

    $response = [
        'status' => 'ok',
        'task_id' => $task_id
    ];

    try {
        $taskProvider->deleteTask($task_id, $user_id);
    } catch (TaskAlreadyIsDoneException $e) {
        $response = [
            'status' => 'error',
            'error_message' => $e->getMessage(),
            'task_id' => $task_id
        ];
    }

    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    die();
}


$tasks = $taskProvider->getUndoneList($user_id);

include "view/tasks.php";