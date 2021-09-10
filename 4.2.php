<!DOCTYPE html>
<html lang="en">
<head>
    <title>METANIT.COM</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
    if(isset($_POST["course"]))
    {
        $course = $_POST["course"];
            echo $course;
    }
?>
<h3>Форма ввода данных</h3>
<form method="post">
    <p>ASP.NET: <input type="checkbox" name="course" value="ASP.NET"/></p>
    <p>Node.js: <input type="checkbox" name="course" value="Node.js"/></p>
    <p>PHP: <input type="checkbox" name="course" value="PHP"/></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>