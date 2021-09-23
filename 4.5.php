<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Форма регистрации</title>
</head>
<body>
<h1>Форма заявки на работу в зоопарке</h1>
<i>Пожалуйста заполните форму. Обязательные поля обозначены*</i>
<fieldset style="margin-top: 15px;margin-bottom: 15px">
    <legend>Контактная информация</legend>
    <form action="registration.php" method="get">
        <p>Имя*: <input style="margin-left: 47px" type="text" name="name"/></p>
        <p>Фамилия: <input style="margin-left: 22px" type="text" name="fam"/></p>
        <p> Email*: <input style="margin-left: 38px" type="text" name="email"/></p>
    </form>
</fieldset>
<fieldset>
    <legend>Персональная информация</legend>
    <form action="registration.php" method="get">
        <p>Возраст*: <input style="margin-left: 21px" type="text" name="name"/></p>
        <p>Пол:
            <form method="post">
                <select style="padding-right: 83px;margin-left: 56px" name="course" size="1">
                    <option value="Female">Женщина</option>
                    <option value="male">Мужчина</option>
                    <option value="Another">Другое</option>
                </select>
        <p>Перечислите личные качества: <textarea style="height: 90px;" type="text"
                                                                       name="email"> </textarea></p>
    </form>
</fieldset>
</body>
</html>