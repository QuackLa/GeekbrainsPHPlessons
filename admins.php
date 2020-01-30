<?php include "config/connect.php" ?>
<head>
    <link rel="stylesheet" href="styles/site.css">
</head>
<script>
    function proverka() {
    if (confirm("Вы уверены?")) {
        return true;
    } else {
        return false;
    }
}
</script>
<img src="images/main_image/main3.jpg" alt="Fail download main-image" class="mainimage-admin">
<body>
    <div class="container">
        <div class="main-menu-block">
            <div class="main-menu">
                <div class="menu-list-admin">Добро пожаловать в админку</div> 
            </div>
        </div>
<?php include_once "config/connect.php" ?>
<?php 
    $url = mysqli_query($side,"SELECT * FROM catalog ORDER BY id");
    $table = [];
    while($i = mysqli_fetch_assoc($url))
        $table[] = $i;
?>
<!-- Список товаров:  -->
<form method="post" action="engine/admins_backend.php">
<table>
<tr>
<?php foreach($table as $k => $v): ?>
    <?php if(($k+1) % 5 != 0) {?>  
        <td class="tableadmin">
            <a href="<?="engine/catalog.php?id=".$v['id']?>" style="text-decoration:none; color:#e87000"><?=$v['name']?></a>
            <a href="<?="engine/catalog.php?id=".$v['id']?>"><img src="<?=$v['photo'] ?>" alt=""></a>
            <button class="buttonadmin" type="submit" name="edit" value='<?=$v['id'] ?>'>Редактировать</button>
            <button class="buttonadmin" type="submit" name="delete" value="<?=$v['id'] ?>" onclick="return proverka()">Удалить</button>
        </td>                 
    <?php }else{ ?>
        <td class="tableadmin">
            <a href="<?="engine/catalog.php?id=".$v['id']?>" style="text-decoration:none; color:#e87000"><?=$v['name']?></a>
            <a href="<?="engine/catalog.php?id=".$v['id']?>"><img src="<?=$v['photo'] ?>" alt=""></a>
            <button class="buttonadmin" type="submit" name="edit" value="<?=$v['id'] ?>">Редактировать</button>
            <button class="buttonadmin" type="submit" name="delete" value="<?=$v['id'] ?>">Удалить</button>
        </td><br></tr><tr>                 
    <?php } ?>                                    
<?php endforeach ?>
    </tr>
    </table>
    </form>
    </div>
<?php include_once "html-elements/footer.php" ?>
</body>