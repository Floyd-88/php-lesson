<!-- Выведите текущее время в формате timestamp. -->
<?php
echo time();
?>

<br>
<br>
<!-- Выведите 1 марта 2025 года в формате timestamp. -->
<?php
echo mktime(0, 0, 0, 3, 1, 2025);
?>

<br>
<br>
<!-- Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен. -->
<?php
$year = date('Y');
echo mktime(0, 0, 0, 12, 31, $year);
?>

<br>
<br>
<!-- Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени. -->
<?php
$date1 = mktime(13, 12, 59, 3, 15, 2000);
$date2 = time();
echo $date2 - $date1;
?>


<br>
<br>
<!-- Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени. -->
<?php
$date1 = mktime(0, 0, 0, 5, 5, 2022);
$date2 = time();
echo floor(($date2 - $date1) / 3600);
?>

<br>
<br>
<!-- Выведите на экран текущий год, месяц, день, час, минуту, секунду. -->
<?php
echo date('Y-m-d H:i:s');
?>

<br>
<br>
<!-- Выведите текущую дату-время в форматах 2025-12-31, 31.12.2025, 31.12.13, 12:59:59. -->
<?php
echo date('Y-m-d') . "<br>";
echo date('d.m.Y') . "<br>";
echo date('H:i:s') . "<br>";
?>


<br>
<br>
<!-- С помощью функций mktime и date выведите 12 февраля 2025 года в формате 12.02.2025. -->
<?php

echo date('d.m.Y', mktime(0, 0, 0, 12, 02, 2025)) . "<br>";

?>


<br>
<br>
<!-- Создайте массив дней недели. С помощью этого массива и функции date выведите на экран название текущего дня недели. Узнайте какой день недели был 06.06.2006, в ваш день рождения. -->
<?php
$arr = [0 => 'вс', 1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб'];
echo $arr[date('w')] . "<br>"; 
echo $arr[date('w', mktime(0, 0, 0, 6, 6, 2006))] . "<br>";
echo $arr[date('w', mktime(0, 0, 0, 11, 27, 88))]; 
?>


<br>
<br>
<!-- Создайте массив месяцев. С помощью этого массива и функции date выведите на экран название текущего месяца. -->
<?php
$arr = [1 => 'ян', 2 => 'фв', 3 => 'мр', 4 => 'апр', 5 => 'май', 6 => 'июн', 7 => 'июл', 8 => 'ав',  9 => 'сен',  10 => 'ок',  11 => 'ноя', 12 => 'дек'];
echo $arr[date('j')] . "<br>"; 

?>


<br>
<br>
<!-- Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. -->
<?php
$mon = date('m');
echo date('t', $mon);

?>


<br>
<br>
<!-- Дана дата в формате 2025-12-31. С помощью функции strtotime и функции date преобразуйте ее в формат 31-12-2025. -->
<?php
$dt = strtotime('2025-12-31');
echo date('d-m-Y', $dt);
?>


<br>
<br>
<!-- В переменной $date лежит дата в формате 2025-12-31. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. -->
<?php
$date = date_create('2025-12-31');
date_modify($date, "2 days");
echo date_format($date, 'Y-m-d') . "<br>";

date_modify($date, "3 days 1 month");
echo date_format($date, 'Y-m-d') . "<br>";

date_modify($date, "3 days 1 month 1 year");
echo date_format($date, 'Y-m-d');
?>


<br>
<br>
<!-- Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году. -->
<?php
$year = "2022";
$dt = time();
$newYear = strtotime("$year-12-31");
$days = $newYear - $dt;
echo round($days / (3600 * 24));
?>



<br>
<br>
<!-- Пусть в переменной содержится некоторый год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат. -->
<?php
$arr = [];
$date = date_create('2020-01-01');
for($i=1; $i<365; $i++) {
    $n = 1;
    date_modify($date, "$n days");
    if(date_format($date, 'd-w') == '13-5') {
        array_unshift($arr, date_format($date, 'd-m-Y'));
    }
}
echo date_format($date, 'd-m-Y') . "<br>";
var_dump($arr);
?>


<br>
<br>
<!-- Узнайте какой день недели был 100 дней назад. -->
<?php
$arr = [0 => 'вс', 1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб'];
$dt = time();
$days = $dt - (100 * 24 * 3600);
echo $arr[date('w', $days)] . "<br>";
?>