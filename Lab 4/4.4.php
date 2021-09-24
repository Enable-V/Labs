<!DOCTYPE html>
<html lang="en">
<head>
    <title>METANIT.COM</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
    if(isset($_POST["technologies"]));
    $technologies = $_POST["technologies"];
    foreach ($technologies as $item) {
        echo "$item<br/>";
}
?>
<h3>Форма ввода данных</h3>
<form method="post">
    <select name="course" size="4" multiple="multiple">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Python">Python</option>
    </select>
    <input type="submit" value="Отправить">
</body>
</html>