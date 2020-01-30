<?php include_once "html-elements/main-menu.php" ?>
<form action="engine/addnewuser.php" method="post">
    <div class="form">
        <p>Ваше имя</p>
        <input type="text" name="name">
        <p>Фамилия</p>
        <input type="text" name="surname">
        <p>Email</p>
        <input type="text" name="mail">
        <p>Login</p>
        <input type="text" name="login">
        <p>Password</p>
        <input type="password" name="password">
        <p><input class="buttonsuccess-registry" type="submit" value="Зарегистрироваться"></p>
    </div>
</form>
</div>
<?php include_once "html-elements/footer.php" ?>
</body>