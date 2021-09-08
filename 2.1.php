<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скрипотов</title>
</head>
<body>
<?php
/* 1 способ */
$name[0] = 'Саша';
$name[1] = 'Маша';
$name[2] = 'Ваня';
$name[3] = 'Аня';
$name[4] = 'Костя';
echo $name[3]. '<br/>'; // Выведится Аня
/* 2 способ */
$name1 = [
        0 => 'Саша',
        1 => 'Маша',
        2 => 'Ваня',
        3 => 'Аня',
        4 => 'Костя',
];
echo $name1[3]. '<br/>'; // Выведится Аня
/* 3 способ */
$name2[] = 'Саша';
$name2[] = 'Маша';
$name2[] = 'Ваня';
$name2[] = 'Аня';
$name2[] = 'Костя';
echo $name2[3]. '<br/>'; // Выведится Аня
/* 4 способ */
$name3 = [
    'Саша',
    'Маша',
    'Ваня',
    'Аня',
    'Костя',
];
echo $name3[3]. '<br/>'; // Выведится Аня
?>
</body>
</html>
<?php
