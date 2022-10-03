<?php
include "model/User.php";
include "model/UserProvider.php";

$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$user = new User('admin');
$user->setName('Ember Song');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');