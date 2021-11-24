<?php
$db = mysqli_connect("localhost", "ahruschev", "GgW4b4", "ahruschev_firstbd");
$result = mysqli_query($db,"DELETE FROM `firma` WHERE `id` = '2'");
if ($result == true)
    echo "Информация из базу удалена успешно";
else
    echo "Информация из базу не удалена";
?>
