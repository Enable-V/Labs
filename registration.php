<?php
define("PAGE_TITLE","Регистрация");
?>
<html>
<title><?= PAGE_TITLE ?></title>
<body>
    <p>Вы ввели:</p>
    <?php
    $username = $_GET['name'];
    $password = $_GET['pword'];
    echo "<p>Имя пользователя = ". $username."</p>";
    echo "<p>Пароль = ". $password."</p>";
    ?>
</body>
</html>


