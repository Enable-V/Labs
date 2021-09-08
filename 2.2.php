<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скрипотов</title>
</head>
<body>
<?php
$capital['Russia'] = 'Москва';
$capital['USA'] = 'Вашингтон';
$capital['France'] = 'Париж';
$capital['Ukraine'] = 'Киев';
$capital['Italy'] = 'Рим';
echo $capital['Russia'];
$naselenie = array(
        'Russia' => 141,
        'Usa' => 304,
        'France' => 63,
        'Ukraine' => 59,
        'Italy' => 59
);
echo '<br/>Столица России - '.$capital['Russia'].', Население - '.$naselenie['Russia'].' млн. человек';
?>
</body>
</html>
<?php
