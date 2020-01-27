<form method="post" id="form">
 <table border=1px style="border-color:blue" >
  <tr>
      <td><input type="number" name="first-number" value=""></td>
      <td><button type="radio" name="operation[]" value="+" style="width:50px">+</button></td>
      <td><button type="radio" name="operation[]" value="-" style="width:50px">-</button></td>
      <td><button type="radio" name="operation[]" value="*" style="width:50px">*</button></td>
      <td><button type="radio" name="operation[]" value="/" style="width:50px">/</button></td>
      <td><input type="number" name="second-number" value=""></td>
   </tr>
</table> 

<!--  ДЛЯ SELECT
<input type="number" name="first-number" value="">
<select name="operation" onchange="document.getElementById('form').submit()">
   <option value="">Выберите операцию</option>
   <option value="+">+</option>
   <option value="-">-</option>
   <option value="*">*</option>
   <option value="/">/</option>
</select>
<input type="number" name="second-number" value="">

-->
</form>
<?php include_once "backend_calculator.php" ?>