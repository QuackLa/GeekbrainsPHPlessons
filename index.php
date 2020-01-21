<html>
<!--
   Чтобы не потерять оставлю здесь
   <script>
$.ajax( {
         type: "GET",
         url: "page2.php",
         data: "file_address=John&location=Boston",
         success: function(msg) {
            alert( "Данные доставлены: " + msg);
         }
      })
</script>
-->
<?php include_once "config/config.php";?>
<body>
<table border="1" width="100%">
<tr><?php foreach($sites as $key => $filename): ?>
     <?php if(($key+1) % 5 == 0) { ?>
     <td><a href="<?=$filename['url'].'?id_employee='.$filename['id_employee']?>"><img src="<?=$filename['file_address']?>" alt='fail' width=100% height=200></a></td><br></tr><tr><?php }else{ ?>
        <td><a href="<?=$filename['url'].'?id_employee='.$filename['id_employee']?>"><img src="<?=$filename['file_address']?>" alt='fail' width=100% height=200></a></td>
        <?php }endforeach ?>
   </tr>
</table>
<?php mysqli_close($side); ?>
</body>
</html>
