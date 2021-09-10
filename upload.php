<?php
//Путь загрузки
$path = 'i/';
//Обработка запроса

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!@copy($_FILES['picture']['tmp_name'],$path.$_FILES))
        echo 'Что-то пошло не так';
    else
        echo 'Загрука удачна';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""//www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Загрузка изображения с измнением размеров</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1>Загрузка изображения с измнением размеров</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <input type="submit" value="Загрузить">
    </form>
</body>
</html>
