<!DOCTYPE html>
<html lang="en">
<head>
<script language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script>
function check() {
    if ($('#input').val() != false || $('#input').val() === 0 )
        $('#button').removeAttr('disabled');
    else
        $('#button').attr('disabled','disable');
}
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
</head>
<body>
    <div><a href='index.php' style="color:#e87000">Главная</a></div><br>
    <!-- Список товаров из БД -->
    <div>Наши товары:</div>
    <ul>
<?php include_once "catalog.php" ?>
<?php foreach($table as $k => $v): ?>
            <li style="list-style-type:square">
                <a href="<?="catalog.php?id=".$v['id']?>" style="text-decoration:none; color:#e87000"><?=$v['name']?></a>
            </li>
<?php endforeach ?>
    </ul>
    <!-- Отзывы -->
    <?php include_once "reviews.php" ?>
        <form method="POST" height=100% action="reviews.php">
        <p>Оставьте отзыв</p>
        <textarea rows="10" cols="50" name="review" id="input" onkeyup="check()"></textarea>
        <div><input type="submit" value="Бумага всё стерпит. И Ваш отзыв тоже. Отправить?" id="button" disabled="disabled"></div>     
        </form>
        
</body>
<div class="footer">
<p>()Калькулятор()</p>
<?php include_once "calculator/calculator.php" ?>
</div>
<?php mysqli_close($side) ?>
</html>