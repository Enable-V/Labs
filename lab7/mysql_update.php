<?php
$db = mysqli_connect("localhost", "ahruschev", "GgW4b4", "ahruschev_firstbd");
$result = mysqli_query($db,"UPDATE `firma` SET `name` = 'Егор', `lastname` = 'Егоров' WHERE `id` = '2'");
        if ($result == true)
            echo "Информация в базу добавлена успешно";
        else
            echo "Информация в базу не добавлена ";
?>
