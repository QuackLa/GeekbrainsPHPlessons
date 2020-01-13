<?php
// Пункт первый ДЗ 
echo "<hr>";
echo "Пункт 1 из задания" . "<hr>";
  $a = rand(-50,50);
  $b = rand(-50,50);
  echo "В этот раз А = $a" . "<br>";
  echo "В этот раз B = $b" . "<br>" . "<br>";
	   if($a>=0 && $b>=0) {
		   echo "Разница A и B равна " . ($a - $b);
	   }else if($a<0 && $b<0) {
		   echo "Произведение A и B равно " . ($a * $b);
	   }else if(($a<0 && $b>=0) || ($a>=0 && $b<0)) {
		echo "Сумма A и B равна " . ($a + $b);
	   }
?>
<br>
<br>
<?php
// Пункт второй ДЗ
  echo "<hr>";
  echo "Пункт 2 из задания" . "<hr>";
  $a = rand(0,15);
  echo "На сей раз A равно " . $a . "<br>" . "<br>";
  switch ($a) {
	  case 0:
	  echo "$a,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
  	break;
  	case 1:
		echo "$a,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
  	break;
  	case 2:
		echo "$a,3,4,5,6,7,8,9,10,11,12,13,14,15";
	break;
	case 3:
		echo "$a,4,5,6,7,8,9,10,11,12,13,14,15";
	break;
	case 4:
		echo "$a,5,6,7,8,9,10,11,12,13,14,15";
	break;
	case 5:
		echo "$a,6,7,8,9,10,11,12,13,14,15";
	break;
	case 6:
		echo "$a,7,8,9,10,11,12,13,14,15";
	break;
	case 7:
		echo "$a,8,9,10,11,12,13,14,15";
	break;
	case 8:
		echo "$a,9,10,11,12,13,14,15";
	break;
	case 9:
		echo "$a,10,11,12,13,14,15";
	break;
	case 10:
		echo "$a,11,12,13,14,15";
	break;
	case 11:
		echo "$a,12,13,14,15";
	break;
	case 12:
		echo "$a,13,14,15";
	break;
	case 13:
		echo "$a,14,15";
	break;
	case 14:
		echo "$a,15";
	break;
	case 15:
		echo $a;
	break;
  }
?>
<br>
<br>
<?php
// Пункт третий ДЗ
echo "<hr>";
echo "Пункт 3 из задания" . "<hr>";
$a = rand(-20,30);
$b = rand(-20,30);
echo "Теперь 'А' = " . $a . "<br>";
echo "'B' приняло значение = " . $b . "<br>" . "<br>";
function les($a, $b) {
	return "При cложении получилось " . round($a + $b) . "<br>";
}
function les1($a,$b) {
	return "При вычитании получилось " . round($a - $b) . "<br>";
}
function les2($a,$b) {
	return "При умножении получилось " . round($a * $b) . "<br>";
}
function les3($a,$b) {
	return ($b != 0)? "При делении получилось " . ($a / $b) . "<br>" : "На ноль делить нельзя!" . "<br>";
	}

echo les($a, $b) . les1($a, $b) . les2($a, $b) . les3($a, $b) . "<br>";



// Пункт четвёртый ДЗ
echo "<hr>";
echo "Пункт 4 из задания" . "<hr>";

function mathOperation($a, $b, $operation) {
	$array = ["+", "-", "*", "/"];
	$operation = $array[rand(0,3)];
switch($operation){
	case "/":
		return les3($a, $b);
	break;
	case "+":
		return les($a, $b);
	break;
	case  "-":
		return les1($a, $b,);
    break;
    case "*":
	   return les2($a, $b);
    break;
    default:
       return "Задан некорректный знак! Допустимы  + , - , * , / ";
    break;
}
}

echo ("Значения А и B можно посмотреть в четвёртом пункте" . "<br>" .
      "Арифметическая операция выбирается произвольно из представленных вариантов" . "<br>" . "<br>");
echo mathOperation($a, $b, $operation) . "<br>";



// Пункт пятый ДЗ
echo "<hr>";
echo "Пункт 5 из задания" . "<hr>";
echo "Пункт 5-й не требовался к исполнению" . "<br>" . "<br>" . "<br>";



// Пункт шестой из ДЗ
echo "<hr>";
echo "Пункт 6 из задания" . "<hr>";
$pow = rand(-20,30);

function operationDelta($a, $pow) {
	return $a ** $pow . "<br>";
}

echo "'А' получаем из четвёртого пункта и оно равно " . $a . "<br>" . 
     "Возводим в степень " . $pow . "<br>" . 
	 "Получаем результат: " . operationDelta($a, $pow) . "<br>" ;



// Пункт седьмой из ДЗ
echo "<hr>";
echo "Пункт 7 из задания" . "<hr>";
$hours = ["час","часа","часов"];
$minutes = ["минута","минуты","минут"]; 
$seconds = ["секунда","секунды","секунд"]; 

// ветка для 'Часов"
switch(date("G")) {
case 1:case 21:
	echo date("G ") . $hours[0];
break;
case 2:case 3:case 4:case 22:case 23:
	echo date("G ") . $hours[1];
break;
case 0:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:case 15:case 16:case 17:case 18:
	case 19:case 20:
	echo date("G ") . $hours[2];
break;
default:
echo "Дата неверная";
break;
}

// ветка для 'Минут'
switch(date("i")) {
	case 1:case 21:case 31:case 41:case 51:
		echo date(" i ") . $minutes[0];
	break;
	case 2:case 3:case 4:case 22:case 23:case 24:case 32:case 33:case 34:case 42:case 43:case 44:case 52:
		case 53:case 54:
		echo date(" i ") . $minutes[1];
	break;
	case 0:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:case 15:case 16:case 17:case 18:
		case 19:case 20:case 25:case 26:case 27:case 28:case 29:case 30:case 35:case 36:case 37:case 38:case 39:
			case 40:case 45:case 46:case 47:case 48:case 49:case 50:case 55:case 56:case 57:case 58:case 59:
		echo date(" i ") . $minutes[2];
	break;
	default:
	echo "Дата неверная";
	break;
}

// ветка для 'Секунд'
switch(date("s")) {
	case 1:case 21:case 31:case 41:case 51:
		echo date(" s ") . $seconds[0];
	break;
	case 2:case 3:case 4:case 22:case 23:case 24:case 32:case 33:case 34:case 42:case 43:case 44:case 52:
		case 53:case 54:
		echo date(" s ") . $seconds[1];
	break;
	case 0:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:case 15:case 16:case 17:case 18:
		case 19:case 20:case 25:case 26:case 27:case 28:case 29:case 30:case 35:case 36:case 37:case 38:case 39:
			case 40:case 45:case 46:case 47:case 48:case 49:case 50:case 55:case 56:case 57:case 58:case 59:
		echo date(" s ") . $seconds[2];
	break;
	default:
	echo "Дата неверная";
	break;
	}


/*час =  1,21
часа = 2-4,22-23
часов = 5-20

минута = 1,21,31,41,51
минуты = 2-4,22-24,32-34,42-4,52-4
минут = 5-20,25-30,35-40,45-50,55-59

секунда = 1,21,31,41,51
секунды = 2-4,22-24,32-34,42-4,52-4
секунд = 5-20,25-30,35-40,45-50,55-59
*/

?>