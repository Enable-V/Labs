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
    'color' => 'белый',
    'Year' => 2005,
    'probeg' => 2000
];
$auto['audi'] = [
    'color' => 'синий',
    'Year' => 2003,
    'probeg' => 2300
];
echo '<br/>Год BMW - ' . $auto['bmw']['Year'];
echo '<br/>Год Audi - ' . $auto['audi']['Year'];
?>
</body>
</html>
<?php
