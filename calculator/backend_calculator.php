<?php
//Проверяем на пустоту первую цифру, при этом допускаем, что она задана равной нулю
if($_POST['first-number'] != "" || $_POST['first-number'] === 0 )
    $cool = $_POST['first-number'];
else
    echo "Не заполнено первое поле!<br>";
//Проверяем на пустоту вторую цифру, при этом допускаем, что она тоже задана равной нулю
if($_POST['second-number'] != "" || $_POST['second-number'] === 0 )
    $cool2 = $_POST['second-number'];
else
    echo "Не заполнено второе поле!<br>";
//Получаем в читаемом видео знак математической операции и так же проверяем, что знак был выбран.
if(!empty($_POST['operation'])){
    $cool3 = $_POST['operation'];
    $z = implode("",$cool3);
}else
    echo "Выберите математическую операцию";
//Создаём схему, что делать если...
if($z == "+" && isset($cool,$cool2))
    echo "Сумма чисел равна: ". ($cool + $cool2);
elseif($z =="-" && isset($cool,$cool2))
    echo "Разность чисел равна: " . ($cool - $cool2);
elseif($z == "*" && isset($cool,$cool2))
    echo "Произведение чисел равно: " . ($cool * $cool2);
elseif($z == "/" && isset($cool,$cool2))
    if($cool2 != 0) echo "Частность чисел равна: " . ($cool / $cool2);
    else echo "На ноль делить нельзя";
else
    return;

/*  ДЛЯ SELECT
if($_POST['first-number'] != "" || $_POST['first-number'] === 0 )
    $cool = $_POST['first-number'];
else
    echo "Не заполнено первое поле!<br>";
//Проверяем на пустоту вторую цифру, при этом допускаем, что она тоже задана равной нулю
if($_POST['second-number'] != "" || $_POST['second-number'] === 0 )
    $cool2 = $_POST['second-number'];
else
    echo "Не заполнено второе поле!<br>";
//Получаем в читаемом видео знак математической операции и так же проверяем, что знак был выбран.
if(!empty($_POST['operation'])){
    $cool3 = $_POST['operation'];
    $z = $cool3;
}else
    echo "Выберите математическую операцию";
//Создаём схему, что делать если...
if($z == "+" && isset($cool,$cool2))
    echo "Сумма чисел равна: ". ($cool + $cool2);
elseif($z =="-" && isset($cool,$cool2))
    echo "Разность чисел равна: " . ($cool - $cool2);
elseif($z == "*" && isset($cool,$cool2))
    echo "Произведение чисел равно: " . ($cool * $cool2);
elseif($z == "/" && isset($cool,$cool2))
    if($cool2 != 0) echo "Частность чисел равна: " . ($cool / $cool2);
    else echo "На ноль делить нельзя";
else
    return;
*/

?>