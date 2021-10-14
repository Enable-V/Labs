<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""//www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Загрузка изображения с изменением размеров</title>
    <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
</head>
<body>
<h1>Загрузка изображения с изменением размеров</h1>
<?php
//Создание директорий
//if (!is_dir("i/")) {
//    mkdir("i/");
//}
//if (!is_dir("tmp/")) {
//    mkdir("tmp/");
//}
//Пути загрущки файлов
$path = 'i/';
$tmp_path = 'tmp/';
//Массив допустимых значений
$types = array('image/gif', 'image/png', 'image/jpeg');
//Максимальный размер файла
$size = 1024000;

//Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Проверям тип файла
    if (!in_array($_FILES['picture']['type'], $types))
        die('<p>Запрещенный тип файла. <a href="?">Попробовать другой файл?</a></p>');

    //Проверям размер файла
    if ($_FILES['picture']['size'] > $size)
        die('<p>Слишком большой размер файла. <a href="?">Попробовать другой файл?</a></p>');
    //Функция изменения размера
    //Изменяет размер изображения в зависимости от type:
    //type = 1 - эскиз
    //type = 2 - большое изображение
    //rotate - поворот на количество градусов (желательно 90,180,270)
    //quality - качество изображения (по умолчанию 75%)
    function resize($file, $type = 1, $rotate = null, $quality = null)
    {
        global $tmp_path;

        //Ограничение по ширине в пикселях
        $max_thumb_size = $_POST['max_thumb_size'];
        $max_size = $_POST['max_size'];
        //Качество изображения по умолчанию
        if ($quality == null)
            $quality = 75;

        //Создаем исходное изображение на основе исходного файла
        if ($file['type'] == 'image/jpeg')
            $source = imagecreatefromjpeg($file['tmp_name']);
        elseif ($file['type'] == 'image/png')
            $source = imagecreatefrompng($file['tmp_name']);
        elseif ($file['type'] == 'image/gif')
            $source = imagecreatefromgif($file['tmp_name']);
        else
            return false;
        //Поворачиваем изображение
        if ($rotate != null)
            $src = imagerotate($source, $rotate, 0);
        else
            $src = $source;

        //Определяем ширину и высоту изображения
        $w_src = imagesx($src);
        $h_src = imagesy($src);

        //В зависимости от типа (эскиз или большое изоборажение) устанавливает ограничение по ширине.
        if ($type == 1)
            $w = $max_thumb_size;
        elseif ($type == 2)
            $w = $max_size;

        $dest = null;
        //Если ширина больше заданной
        if ($w_src > $w) {
            //Вычисление пропорций
            if ($w_src > $h_src) {
                $ratio = $w_src / $w;
                $w_dest = round($w_src / $ratio);
                //Создаем пустую картинку
                ////Копируем старое изображение в новое с изменением параметров
                $dest = imagecreatetruecolor($w_dest, $h_src);
                imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_src, $w_src, $h_src);
            } elseif ($w_src < $h_src)
                $ratio = $h_src / $w;
            $h_dest = round($w_src / $ratio);
            $dest = imagecreatetruecolor($w_src, $h_dest);
            //Создаем пустую картинку
            //Копируем старое изображение в новое с изменением параметров
            imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_src, $h_dest, $w_src, $h_src);

            //Вывод картинки и очистка памяти
            imagejpeg($dest, $tmp_path . $file['name'], $quality);
            imagedestroy($dest);
            imagedestroy($src);

            return $file['name'];
        } else {
            //Вывод картинки и очистка памяти
            imagejpeg($dest, $tmp_path . $file['name'], $quality);
            imagedestroy($src);

            return $file['name'];
        }
    }

    //Загрузка файла и вывод сообщения
    $_POST['file_rotate'] = isset($_POST['file_rotate']) ? $_POST['file_rotate'] : null;
    $name = resize($_FILES['picture'], $_POST['file_type'], $_POST['file_rotate']);

    if (!@copy($tmp_path . $name, $path . $name))
        echo '<p>Что-то пошло не так </p>';
    else
        echo '<p>Загрузка удачно прошла удачно <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a>.</p>';

    //Удаляем временный файл
    unlink($tmp_path . $name);
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <br><label>Тип загрузки</label>
    <br><select name="file_type">
        <option value="1">Эскиз</option>
        <option value="2">Большое изображение</option>
    </select>
    <br><label>Поворот</label>
    <br><input type="text" name="file_rotate">
    <br><label>Ограничение эскиза по большей стороне</label>
    <br><input type="text" name="max_thumb_size">
    <br><label>Ограничение большого изображения по большей стороне</label>
    <br><input type="text" name="max_size">
    <br><input type="submit" value="Загрузить">
</form>
</body>
</html>