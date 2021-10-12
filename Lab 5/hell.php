<?php
define("PAGE_TITLE", "Приветствие");
?>
<html>
<title><?= PAGE_TITLE ?></title>
<body>
<?php
$username = $_GET['name'];
$email = $_GET['email'];
echo "<p>Здравствуйте, " . $username . "! Мы берем на рассмотрение вашу заявку. Ответ пришлём на ваш email: " . $email . "</p>";
if ($_GET['age'] < 18) {
    echo "Вы  слишком молоды!";
} elseif ($_GET['age'] > 40) {
    echo "Извините, но вы нам не подходите";
}
?>
</body>
</html>


