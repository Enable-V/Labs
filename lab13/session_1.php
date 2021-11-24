<?php
//Инициализируем сессию:
session_start();
//Пишем в сессию:
$_SESSION['test'] = 'Тест!';

//Выведем переменную test из сессии:
//echo $_SESSION['test'];
/*
    Переменная $_SESSION['counter'] будет нашим счетчиком.
    Если скрипт запускается первый раз -
    она будет пуста, присвоим ей единицу.
    Если не первый раз - тогда прибавим единицу.
*/
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
//unset($_SESSION['counter']);
//Выведем значение счетчика:
echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';

/*
    Обновите страницу несколько раз,
    посмотрите на то, как увеличивается значение переменной.
    Затем закройте браузер, подождите полчаса и откройте снова -
    убедитесь в том, что переменная обнулилась!
*/
//После выполнения этой команды ВСЕ переменные сессии станут null:
//session_destroy();
?>
