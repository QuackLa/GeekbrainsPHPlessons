<?php include_once "config/connect.php";
$salt = "cnbnbvnvqFsfDFDS+gfdgfd";
$mom = $_POST['login'];
$pap = md5($_POST['password']).md5($_POST['password']).$salt;
$checklog = mysqli_query($side,"SELECT `login` FROM users where `login`='$mom'");
$checkpass = mysqli_query($side,"SELECT `login` FROM users where `password`='$pap' and `login`='$mom'");
$checklogin = [];
$checkpassword = [];
    while($i = mysqli_fetch_assoc($checklog))
        $checklogin[] = $i;
    while($i = mysqli_fetch_assoc($checkpass))
        $checkpassword[] = $i; 
// Если введённый пользователем логин совпал с каким-то из базы, то мы проверяем совпала ли вся пара логин и пароль. 
// Проверяем просто на наличие пустоты в ответе БД ?>
<?php include_once "html-elements/main-menu.php";     

    if(empty($checklogin)){
        echo "Такого пользователя не существует"; ?>
        <?php  
    }elseif(!empty($checklogin) && !empty($checkpassword)){ ?>
        <p class="h1-main-page">Добро пожаловать, <?=$mom?>!</p>
        <?php 
    }else{?>
       <p class="h1-main-page">Неверный пароль</p>
    <?php } ?>
</div>
<?php include_once "html-elements/footer.php" ?>
</body>

