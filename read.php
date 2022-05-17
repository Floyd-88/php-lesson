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

<br>
<br>
<!-- Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt. -->
<?php
// rename('old.txt', 'new_old.txt');
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку. -->
<?php
// rename('new_old.txt', 'dir/new_old.txt');
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежит папка dir, а в ней файл file.txt. Пусть также в корне вашего сайта лежит папка dir2. Переместите файл в эту папку. -->
<?php
// rename('dir/new_old.txt', 'dir_2/new_old.txt');
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежит файл. С помощью цикла положите в папку copy пять копий этого файла. Именем файлов копий пусть будут их порядковые номера. -->

<?php
// for($i=1; $i<=5; $i++) {
//     copy('dir_2/new_old.txt', "copy/copy_new_old_$i.txt");
// }
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы. -->

<?php
// $arr = ['1.txt', '2.txt', '3.txt'];
// foreach($arr as $elem) {
//     unlink($elem);
// }
?>


<br>
<br>
<!-- Пусть в корне вашего сайта лежит файл. Узнайте его размер, выведите на экран. -->
<?php
echo "файл cookie_5.php: " . filesize('cookie_5.php') . " байта";
?>


<br>
<br>
<!-- Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах. -->
<?php
echo "файл cookie_5.php: " . filesize('cookie_5.php') / 1024 . " Кбайт";
?>


<br>
<br>
<!-- Проверьте, лежит ли в корне вашего сайта файл file.txt. -->
<?php
if(file_exists('file.txt')) {
    echo 'файл file.txt лежит в корневой папке';
} else echo 'файла file.txt нет в корневой папке';
?>


<br>
<br>
<!-- Проверьте, лежит ли в корне вашего сайта файл file.txt. Если нет - создайте его и запишите в него текст '!'. -->
<?php
if(file_exists('file.txt')) {
    $str = file_get_contents('file.txt');
    echo "файл file.txt c следующим содержимым ( $str ) лежит в корневой папке";
    
} else {
    file_put_contents('file.txt', '!');
};
?>


<br>
<br>
<!-- Создайте в корне вашего сайта папку с названием dir. -->
<?php
// mkdir('dir_3');
?>

<br>
<br>
<!-- Дан массив со строками. Создайте в корне вашего сайта папки, названиями которых служат элементы этого массива -->
<?php
// $arr = ["aaa", "bbb", "ccc", "ddd"];
// foreach($arr as $elem) {
//     mkdir("dir_3/$elem");
// }
?>

<br>
<br>
<!-- Создайте в корне вашего сайта папку с названием test. Затем создайте в этой папке три файла: 1.txt, 2.txt, 3.txt. -->
<?php
// for($i=1; $i<=3; $i++) {
//     file_put_contents("dir_3/$i.txt", "");
// }
?>

<!-- Удалите папку с названием dir_3 -->

<?php
// rmdir('dir_3/aaa')
?>

<!-- Пусть в корне вашего сайта лежит папка dir. Переименуйте ее на test. -->
<?php
// rename("dir_3", "dir_4")
?>

<br>
<br>
<!-- Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов. -->
<?php
$arr = array_diff(scandir('dir_4'), ['.', '..']);
foreach($arr as $elem) {
    echo $elem . "<br>";
}
?>

<br>
<br>
<!-- Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Переберите эти файлы циклом и выведите их тексты в браузер. -->
<?php
$arr = array_diff(scandir('dir_4'), ['.', '..']);
foreach($arr as $elem) {
   if(strpos($elem, '.txt')) {
    echo file_get_contents("dir_4/$elem") . "<br>";
    }
}
?>

<br>
<br>
<!-- Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак. -->
<?php
// $arr = array_diff(scandir('dir_4'), ['.', '..']);
// foreach($arr as $elem) {
//    if(strpos($elem, '.txt')) {
//     echo file_put_contents("dir_4/$elem", file_get_contents("dir_4/$elem"). "!!!") . "<br>";
//     }
// }
?>


<br>
<br>
<!-- Дана папка. Выведите на экран столбец имен подпапок из этой папки. -->
<?php
$patch = "dir_4";
$arr = array_diff(scandir($patch), [".", ".."]);
foreach($arr as $elem) {
    if(is_dir($patch . "/" . $elem)) {
    echo $elem . "<br>";
    }
}
?>

<br>
<br>
<!-- Дана папка. Выведите на экран столбец имен файлов из этой папки. -->
<?php
$patch = "dir_4";
$arr = array_diff(scandir($patch), [".", ".."]);
foreach($arr as $elem) {
    if(is_file($patch . "/" . $elem)) {
    echo $elem . "<br>";
    }
}
?>

<!-- Дана папка. Запишите в конец каждого файла этой папки текущий момент времени. -->
<?php
$patch = "dir_4";
$arr = array_diff(scandir($patch), [".", ".."]);
foreach($arr as $elem) {
    $patch_2 = $patch . "/" . $elem;
    if(is_file($patch_2)) {
    file_put_contents($patch_2, file_get_contents($patch_2) . " " . date("H:m:s"));
    }
}
?>