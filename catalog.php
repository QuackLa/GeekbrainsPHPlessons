<?php include_once "config/connect.php"; ?>
<?php 
$url = mysqli_query($side,"SELECT * FROM catalog ORDER BY id");
    $table = [];
    while($i = mysqli_fetch_assoc($url))
        $table[] = $i;
$getid = $_GET['id'];
    $products = [];
    $checkbase = mysqli_query($side,"SELECT * FROM catalog WHERE id='$getid'");
    while($i = mysqli_fetch_assoc($checkbase)) 
        $products[] = $i; 
?>
<?php foreach($products as $k => $v): ?>
<div><a href='index.php' style="color:#e87000">Главная</a></div>
<img src="<?=$v['photo'] ?>" alt="Cant find photo" width=30%>
<h2><?=$v['name'] ?></h2>
<p style="width:800px"><?=$v['description'] ?></p>
<?php endforeach ?>