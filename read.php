<!-- Пусть у вас есть файлы 1.txt и 2.txt, в тексте которых записаны какие-то числа. Напишите скрипт, который выведет на экран сумму записанных в этих файлах чисел. -->

<?php
echo file_get_contents('text_1.txt') + file_get_contents('text_2.txt');
?>

<br>
<br>
<!-- Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt. -->
<?php
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
file_put_contents('sum.txt', $sum);

echo file_get_contents('sum.txt');
?>

<!-- Пусть у вас есть файл, в котором записано некоторое число. Откройте этот файл, возведите число в квадрат и запишите обратно в файл. -->

<br>
<br>
<?php
// $num = file_get_contents('text_1.txt');
// $new_num = $num * $num;
// file_put_contents('text_1.txt', $new_num);
// echo file_get_contents('text_1.txt');
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежит файл count.txt. Изначально в нем записано число 0. Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1. То есть у нас получится счетчик обновления страницы в виде файла. -->

<?php
// $num = file_get_contents('count.txt');
// file_put_contents('count.txt', ++$num);
// echo $num;
?>

<br>
<br>
<!-- Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt. Изначально этого файла не должно быть. -->
<?php
$arr = ['text_1' => file_get_contents('text_1.txt'), 'text_2' => file_get_contents('text_2.txt'), 'count' => file_get_contents('count.txt')];
file_put_contents('new.txt', implode(", ", $arr));
?>
