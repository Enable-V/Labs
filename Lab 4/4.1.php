<!DOCTYPE html>
<html lang="en">
<head>
    <title>METANIT.COM</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
if (isset($_POST["technologies"])) ;
$technologies = $_POST["technologies"];
foreach ($technologies as $item) {
    echo "$item<br/>";
}
?>
<h3>Форма ввода данных</h3>
<form method="post">
    <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET"/></p>
    <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js"/></p>
    <p>PHP: <input type="checkbox" name="technologies[]" value="PHP"/></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>