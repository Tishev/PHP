<?php
/**
 * @var Task $task
 */
?>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>

<?php if (is_null($username)): ?>
    <a href="/?controller=security">Войти</a>
<?php else: ?>
    <?= $username ?> <a href="/?controller=security&action=logout">Выйти</a>
    <a href="/">Главная</a>

<?php endif; ?><br><br>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Опишите новую задачу">
    <input type="submit" value="Добавить">
</form>
<?php foreach ($tasks as $key => $task): ?>
    <div>
        <?=$task->getDescription()?>
        <a href="/?controller=tasks&action=done&key=<?=$key?>">[Done]</a><br><br>
    </div>
<?php endforeach; ?>


</body>
