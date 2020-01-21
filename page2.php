
<?php 
include_once "config/config.php";


//Получаем, с помощью параметра GET, значение id_employee со страницы index.php при обращении к какой-либо из картинок
$getid = $_GET['id_employee'];

//Отправляем в БД обновлённое значение кликов для элемента с полученным параметром id
$shows = mysqli_query($side,"UPDATE employee SET clicks=clicks+1 WHERE id_employee='$getid'");

//Получаем ссылку на картинку по полученному id_employee элемента
$image = mysqli_query($side,"SELECT file_address FROM employee WHERE id_employee='$getid'");

//Получаем актуальное значение просмотров(кликов) для картинки с полученным id
$checker = mysqli_query($side,"SELECT clicks FROM employee WHERE id_employee='$getid'");

//Извлекаем в читаемом виде актуальное значение просмотров
$checks = implode("",mysqli_fetch_assoc($checker));

//Извлекаем в читаемом виде путь к картинке с полученным id
$i = implode("",mysqli_fetch_assoc($image));


//Выводим картинку с ограничем ширины
echo "<img src='$i' alt='' width=60%><br>";
//Выводим значение столбца clicks, оно же счётчик просмотров
echo "Просмотров: ".$checks;

mysqli_close($side);
?>

