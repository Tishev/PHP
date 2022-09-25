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

// $question = (int)readline("В каком году произошло крещение Руси?780, 988, 860?") ;

//  if ($question === 988) {
//     echo('Поздравляю, вы ответили верно');
// } elseif ($question === 780 || $question === 860) {
//     echo('Вы ответили неверно');
// } 
// elseif ($question !== 988 && $question !== 780 && $question !== 860) {
//     $question = (int)readline("В каком году произошло крещение Руси?780, 988, 860?");
// }


// $array =[ 
//     0 => [
//         2, 4, 6, 8, 10, 12, 14,  16,  18, 20
//     ],
//     1 => [
//         1, 3, 5, 7, 9, 11, 13, 15, 17, 19
//         ]
//     ];



// foreach ($array as $index => $numbers) {
//    foreach ($numbers as $numbersIndex => $number) {
//        $numbers = $numbersIndex * $number; 
//        print_r($numbers);
//    };
// };






//  3 урок 1 задание 
$evenArr = [2, 4, 6, 8, 10, 12, 14,  16,  18, 20];

$oddArr = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];

$arr1 = $evenArr[0] * $oddArr[0];
$arr2 = $evenArr[1] * $oddArr[1];
$arr3 = $evenArr[2] * $oddArr[2];
$arr4 = $evenArr[3] * $oddArr[3];
$arr5 = $evenArr[4] * $oddArr[4];
$arr6 = $evenArr[5] * $oddArr[5];
$arr7 = $evenArr[6] * $oddArr[6];
$arr8 = $evenArr[7] * $oddArr[7];
$arr9 = $evenArr[8] * $oddArr[8];
$arr10 = $evenArr[9] * $oddArr[9];

$array = [$arr1, $arr2, $arr3, $arr5, $arr6, $arr7, $arr8, $arr9, $arr10];
print_r($array);

// 3 урок 2 задание 

$wish = ['счастья', 'здоровья', 'удачи'];

$epithets = ['бесконечного', 'крепкого', 'большой'];

$array1 = array_rand($epithets);
$arrayEpithets = $epithets[$array1];

$array2 = array_rand($wish);
$arrayWish = $wish[$array2];

$name = readline('Как вас зовут?');


echo "Здравствуйте, $name Поздравляю вас с днём рождения желаю $arrayEpithets $arrayWish, $arrayEpithets $arrayWish, $arrayEpithets $arrayWish";

