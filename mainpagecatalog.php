<head>
    <link rel="stylesheet" href="styles/site.css">
</head>
    <?php include_once "html-elements/main-menu.php" ?>
        <table class="table-catalog">
            <tr>
                <?php include_once "config/connect.php" ?>
                <?php include_once "engine/catalog.php" ?>
                <?php foreach($table as $k => $v): ?>
                    <?php if(($k+1) % 4 != 0) {?>
                        <td>
                            <a class="td-catalog" href="<?="engine/catalog.php?id=".$v['id']?>"><img src="<?=$v['photo'] ?>" alt="" width=100></a>
                        </td>                    
                        <td  style="list-style-type:square">
                            <a class="td-catalog" href="<?="engine/catalog.php?id=".$v['id']?>" style="text-decoration:none; color:#e87000"><?=$v['name']?></a>
                        </td>
                    <?php }else{ ?>
                        <td>
                            <a class="td-catalog" href="<?="engine/catalog.php?id=".$v['id']?>"><img src="<?=$v['photo'] ?>" alt="" width=100></a>
                        </td>                    
                        <td  style="list-style-type:square">
                            <a class="td-catalog" href="<?="engine/catalog.php?id=".$v['id']?>" style="text-decoration:none; color:#e87000"><?=$v['name']?></a>
                        </td><br></tr><tr>
                    <?php } ?>                                    
                <?php endforeach ?>
            </tr>
        </table>
 </div>
<?php include_once "html-elements/footer.php" ?>
</body>