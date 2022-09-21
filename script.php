<?php

$name = readline('Как вас зовут?');
echo $name;

$age = readline( 'Сколько вам лет?');
echo $age;


$infoName = 'Вас зовут' . $name;
$infoAge = 'Ваш возраст' . $age;
echo $infoName . $infoAge;



$whoTask1 = readline('Какая задача стоит перед вами сегодня?');
$howLong1 = readline('Сколько примерно времени эта задача займет?');
$whoTask2 = readline('Какая задача стоит перед вами сегодня?');
$howLong2 = readline('Сколько примерно времени эта задача займет?');
$whoTask3 = readline('Какая задача стоит перед вами сегодня?');
$howLong3 = readline('Сколько примерно времени эта задача займет?');


echo $name . ', сегодня у вас запланировано 3 приоритетных задачи на день:' ;
echo  $whoTask1 . $howLong1 . 'ч';
echo  $whoTask2 . $howLong2 . 'ч';
echo $whoTask3 . $howLong3 . 'ч';
echo 'Примерное время выполнения плана:' .  $howLong1 + $howLong2 + $howLong3 . "часов"; 