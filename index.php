<html>
<?php $files = glob("images/{*.jpg, *.png, *.gif, *.svg}", GLOB_BRACE);?>
<body>
<table border="1" width="100%">
   <tr><?php foreach($files as $key => $filename):
      if(($key+1) % 5 == 0) {
      echo "<td><a href='$filename'>" . "<img src='$filename'" .  "alt='fail' width=100% height=200></a></td><br></tr><tr>";}
      else{ echo "<td><a href='$filename'>" . "<img src='$filename'" .  "alt='fail' width=100% height=200></a></td>";}
      endforeach ?>
   </tr>
</table>
</body>
</html>