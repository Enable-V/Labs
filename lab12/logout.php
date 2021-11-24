<?php
session_start();

unset($_SESSION['login'], $_SESSION['id']);

header('Locaiton: lab11/index.php');
exit;
?>
