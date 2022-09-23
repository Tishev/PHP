<?php

// $name = readline('Как вас зовут?');
// echo $name;

// $age = readline( 'Сколько вам лет?');
// echo $age;


// $infoName = 'Вас зовут' . $name;
// $infoAge = 'Ваш возраст' . $age;
// echo $infoName . $infoAge;



// $whoTask1 = readline('Какая задача стоит перед вами сегодня?');
// $howLong1 = readline('Сколько примерно времени эта задача займет?');
// $whoTask2 = readline('Какая задача стоит перед вами сегодня?');
// $howLong2 = readline('Сколько примерно времени эта задача займет?');
// $whoTask3 = readline('Какая задача стоит перед вами сегодня?');
// $howLong3 = readline('Сколько примерно времени эта задача займет?');


// echo $name . ', сегодня у вас запланировано 3 приоритетных задачи на день:' ;
// echo  $whoTask1 . $howLong1 . 'ч';
// echo  $whoTask2 . $howLong2 . 'ч';
// echo $whoTask3 . $howLong3 . 'ч';
// echo 'Примерное время выполнения плана:' .  $howLong1 + $howLong2 + $howLong3 . "часов"; 

$question = (int)readline("В каком году произошло крещение Руси?780, 988, 860?") ;

 if ($question === 988) {
    echo('Поздравляю, вы ответили верно');
} elseif ($question === 780 || $question === 860) {
    echo('Вы ответили неверно');
} 
elseif ($question !== 988 && $question !== 780 && $question !== 860) {
    $question = (int)readline("В каком году произошло крещение Руси?780, 988, 860?");
}
