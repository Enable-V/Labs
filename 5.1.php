<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
</head>
<body>
<form enctype="multipart/form-data" method="post">
    <input name="picture" type="file">
    <input type="submit" value="Загрузить">
</form>
<?php
$path = 'i/';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
        echo 'Что-то пошло не так';
    else
        echo 'Загрузка удачна';
}
?>
</body>
</html>