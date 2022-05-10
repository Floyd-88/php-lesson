<!-- Сделайте функцию, выводящую на экран ваше имя. -->

<?php
function func() {
    echo "Ilia";
}
func();
?>

<br>
<br>
<!-- Сделайте функцию, выводящую на экран сумму чисел от 1 до 100. -->
<?php
function func1() {
    $arr = range(1, 100);
    echo array_sum($arr);
}
func1();
?>

<br>
<br>
<!-- Сделайте функцию, которая параметрами принимает 3 числа и выводит на экран сумму этих чисел. -->
<?php
function func3($num1, $num2, $num3) {
    $num = $num1 + $num2 + $num3;
    echo $num;
}
func3(1, 2, 3);
?>

<br>
<br>
<!-- Сделайте функцию, которая параметром принимает число, а возвращает куб этого числа. С помощью этой функции найдите куб числа 3 и запишите его в переменную $result. -->
<?php
function func4($num1) {
    return pow($num1, 3);

}
$result = func4(3);
echo $result;
?>


<br>
<br>
<!-- Напишите функцию, которая параметром будет принимать число и делить его на 2 столько раз, пока результат не станет меньше 10. Пусть функция возвращает количество итераций, которое потребовалось для достижения результата. -->
<?php
function func5($num1) {  
    $i = 0;
    while(true) {
     $num1 = $num1 / 2;
     $i++;
     if($num1 < 10) return $i;
    }
}
$result = func5(500);
echo $result;
?>


<br>
<br>
<!-- Напишите функцию, которая будет находить сумму квадратных корней элементов массива. -->
<?php
function func6($arr) {  
    $sum = 0;
    foreach($arr as $elem) {
        $sum += sqrt($elem);
    }
    return $sum;
}
$arr = [4, 9, 16];
echo func6($arr);
?>


<br>
<br>
<!-- Реализуйте функцию getDivisors, которая параметром будет принимать число и возвращать массив его делителей, то есть целых чисел, на которое делится наше число. -->
<?php
function getDivisors($num) {  
    $arr = [];
  for($i = 1; $i <= $num; $i++) {
    if($num % $i == 0) {
       array_unshift($arr, $i); 
    } 
  }
  sort($arr);
  return $arr;
}
var_dump(getDivisors(25));
?>


<br>
<br>
<!-- Сделайте функцию delElem, которая параметрами будет принимать значение и массив и удалять из массива все элементы с таким значением. -->
<?php
function delElem($num, $arr) {  
  for($i = 0; $i < count($arr); $i++) {
    if($num == $arr[$i]) {
       array_splice($arr, $i, 1); 
    } 
  }
  sort($arr);
  return $arr;
}
$arr = [4, 9, 16];
var_dump(delElem(16, $arr));
?>


<br>
<br>
<!-- Сделайте функцию, которая параметром будет принимать массив с числами, и проверять, что все элементы в этом массиве являются четными числами. -->
<?php
function func7($arr) {  
  foreach($arr as $elem) {
      if($elem % 2 !== 0) return "false";   
    }
return "true"; 
}
$arr = [4, 10, 16];
var_dump(func7($arr));
?>


<br>
<br>
<!-- Сделайте функцию, которая параметром будет принимать число и проверять, что все цифры это числа являются нечетными. -->
<?php
function func10($num) { 
    $arr = str_split($num);
  foreach($arr as $elem) {
      if($elem % 2 === 0) return "false";   
    }
return "true"; 
}
$num = 774735;
echo func10($num);
?>


<br>
<br>
<!-- Сделайте функцию, которая параметром будет принимать массив и проверять, есть ли в этом массиве два одинаковых элемента подряд. -->
<?php
function func11($arr) {  
    $arr2 = [];
  foreach($arr as $elem) {
      array_push($arr2, $elem);
      if(count($arr2) > 1){
        if($elem === $arr2[count($arr2) - 2]) return "true";   
      }
      
    }
return "false"; 
}
$arr = [4, 10, 16, 7, "aa", "aaa", 7];
var_dump(func11($arr));
?>


<br>
<br>
<!-- Дана функция, которая параметром принимает целое число и возвращает сумму его цифр:
С помощью приведенной функции найдите все года от 1 до 2030, сумма цифр которых равна 13. -->
<?php
function year() {
    $arr = [];
    for($i = 1; $i <= 2030; $i++) {
        if(getDigitsSum($i) === 13) {
            $arr[] = $i;
        }
    }
   return $arr; 
}
var_dump(year());
function getDigitsSum($num) {
    return array_sum(str_split($num));
    };
?>


<br>
<br>
<!-- Напишите код, который будет находить среднее от делителей заданного числа. -->
<?php
function getAvgNum($arr) {
    return array_sum($arr) / count($arr);
}
function dividerNum($num) {
    $arr = [];
    for($i = 2; $i <$num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
    };
    $num = 10;
    echo getAvgNum(dividerNum($num));
?>

<br>
<br>
<!-- Пусть у нас дано число. Давайте получим все собственные делители этого числа, являющиеся простыми числами. -->

<?php
function getDividerNumLite($num) {
$result = [];
$divs = getDivider($num); 
foreach($divs as $div) {
      if(numLite($div)) {
          $result[] = $div;
      }
  }
  if(!empty($result)){
    return $result;
  } return "Нет простых чисел!";
}
function getDivider($num) {
    $divs = [];
        for($i = 2; $i < $num; $i++) {
        if($num % $i === 0) {
            $divs[] = $i;
        }
    }
        return $divs;
}

function numLite($div) {
    for($i = 2; $i < $div; $i++) {
        if($div % $i === 0) {
            return false;
        } return true;        
    }
}
$num = 16;
var_dump(getDividerNumLite($num));
?>


<br>
<br>
<!-- С помощью рекурсии выведите элементы этого массива на экран. -->
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    function recur($arr) {

        var_dump(array_shift($arr));
        if(count($arr) !== 0) {
            recur($arr);
        }
    }
    recur($arr);
?>


<br>
<br>
<!-- С помощью рекурсии найдите сумму элементов этого массива. -->
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    function recur2($arr) {
        $sum = array_shift($arr); 
      
        if(count($arr) !== 0) {
           $sum += recur2($arr);
        }
        return $sum;
    }
    echo recur2($arr);
?>


<br>
<br>
<!-- Дан многомерный массив произвольного уровня вложенности, например, такой:
<?php
	$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
?>
С помощью рекурсии выведите все примитивные элементы этого массива на экран. -->

<?php
    $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

    function recur3($arr) {
        foreach($arr as $elem) {
            if(is_array($elem)){
                recur3($elem);
            } else {
               echo $elem;
            }
        }
      
    }
    recur3($arr);
?>


<br>
<br>
<!-- Дан многомерный массив произвольного уровня вложенности, например, такой:
<?php
	$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
?>
С помощью рекурсии найдите сумму элементов этого массива. -->
<?php
    $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

    function recur4($arr) {
        $sum = 0;
        foreach($arr as $elem) {
            if(is_array($elem)){
               $sum += recur4($elem);
            } else {
             $sum += $elem;
            }
        }
      return $sum;
    }
   echo recur4($arr);
?>


<br>
<br>
<!--Дан многомерный массив произвольного уровня вложенности, содержащий внутри себя строки, например, такой:
<?php
	$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
?>
С помощью рекурсии слейте элементы этого массива в одну строку:
'abcdefgjk'  -->
<?php
    $arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];

    function recur5($arr) {
        $sum = "";
        foreach($arr as $elem) {
            if(is_array($elem)){
               $sum .= recur5($elem);
            } else {
             $sum .= $elem;
            }
        }
      return $sum;
    }
   echo recur5($arr);
?>



<br>
<br>
<!-- Дан многомерный массив произвольного уровня вложенности, например, такой:
<?php
	$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
?>
Возведите все элементы-числа этого массива в квадрат. -->

<?php
	$arr = [2, [2, 7, 8], [3, 4], [5, [6, 7]]];

    function recur6($arr) {
        $arr2 =[];
        foreach($arr as $elem) {
            if(is_array($elem)){
           $arr2[] = recur6($elem);
            } else {
             $arr2[] = $elem * $elem;

            }
        }
      return $arr2;
    }
   var_dump(recur6($arr));
?>


<br>
<br>
<!-- Сделайте функцию, которая будет проверять пару чисел на дружественность. Дружественные числа - два числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу. -->
<?php
function sumNum($a, $b) {
    if(array_sum(Num($a)) === $b and array_sum(Num($b)) === $a) {
        echo "yes";
    } else echo "no";

}

function Num($num) {
    $arr = [];
    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
sumNum(221, 284);
?>

<br>
<br>
<!-- Используя созданную вами функцию из предыдущей задачи найдите все пары дружественных чисел в промежутке от 1 до 1000. -->
<?php
function sumNum2($a, $b) {
    if(array_sum(Num2($a)) === $b and array_sum(Num2($b)) === $a) {
        return "yes";
    } return "no";

}

function Num2($num) {
    $arr = [];
    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

    function allNum() {
        $arr2 = [];
        for($i=1; $i<=1000; $i++) {
            for($j=1; $j<=1000; $j++) {
                if(sumNum2($i, $j) == 'yes' and $i !== $j){
                    $arr2[] = $i;
                    $arr2[] = $j;
                }
                
            }
        }
        return array_unique($arr2);
    }
// var_dump(allNum());
?>


<br>
<br>
<!-- Сделайте функцию, которая будет проверять число на совершенность. Совершенное число - это число, сумма собственных делителей которого равна этому числу. -->
<?php
function greatNum($num) {
    if($num === array_sum(Num4($num))) {
        echo "yes";
    } else echo "no";
}

function Num4($num) {
    $arr = [];
    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
greatNum(6);
?>

<br>
<br>
<!-- Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера. -->
<?php
function happen() {
    $arr = [];
    for($i=1; $i<999999; $i++) {
       $result = array_pad(str_split($i), -6, 0);
            if( (int) $result[0] + (int) $result[1] + (int) $result[2] === (int) $result[3] + (int) $result[4] + (int) $result[5]) {
                echo implode("", $result) . "<br>";
            } 
        } 
    } 
happen();
?>


<br>
<br>
<!-- Сделайте функцию, которая параметром будет принимать два числа и возвращать массив их общих делителей. -->
<?php
function twoNum($num1, $num2) {
    return array_intersect(num5($num1), num5($num2));
}

function num5($num) {
    $arr = [];
    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
var_dump(twoNum(1000, 100));
?>

