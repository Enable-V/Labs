<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скрипотов</title>
</head>
<body>
<?php
$auto = [];
$auto['bmw'] = [
    'model' => 'x5',
    'speed' => 120,
    'dors' => 5,
    'year'=> 2006
];
$auto['toyota'] = [
    'model' => 'Carina',
    'speed' => 130,
    'dors' => 4,
    'year'=> 2007
];
$auto['opel'] = [
    'model' => 'Corsa',
    'speed' => 140,
    'dors' => 5,
    'year'=> 2007
];
echo 'bmw'.' - '.$auto['bmw']['model'].' - '.$auto['bmw']['speed'].' - '.$auto['bmw']['dors'].' - '.$auto['bmw']['year'].'<br/>';
echo 'toyota'.' - '.$auto['toyota']['model'].' - '.$auto['toyota']['speed'].' - '.$auto['toyota']['dors'].' - '.$auto['toyota']['year'].'<br/>';
echo 'opel'.' - '.$auto['opel']['model'].' - '.$auto['opel']['speed'].' - '.$auto['opel']['dors'].' - '.$auto['opel']['year'].'<br/>';
?>
</body>
</html>
<?php
