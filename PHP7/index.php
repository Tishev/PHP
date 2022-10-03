<?php
//session_start();
//unset($_SESSION['username']);
$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

require_once $routes[$controller] ?? "view/404.php";
