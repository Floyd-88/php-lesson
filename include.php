<?php
function include_file($str) {
    ob_start();
    include "$str";
    return ob_get_clean(); 
}
ob_start();
include 'week_days.php';
$week = ob_get_clean();
?>

<!-- Даны файлы со следующей версткой:

<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<header>
			header
		</header>
		<aside>
			sidebar
		</aside>
		<main>
			content
		</main>
		<header>
			footer
		</header>
	</body>
</html>
Пусть верстка файлов отличается лишь тайтлами и контентом. Вынесите содержимое хедера, футера и сайдбара в отдельные подключаемые файлы. -->

<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<header>
            <?php include 'header.php' ?>
		</header>
		<aside>
            <?php include 'sidebar.php' ?>
		</aside>
		<main>
			content
		</main>
		<footer>
            <?php include 'footer.php' ?>
        </footer>
	</body>
</html>


<br>
<br>
<!-- Сделайте файл, который будет генерировать из массива дней выпадающий список дней недели. Запишите результат в переменную в вашем основном файле. Выведите эту переменную в нескольких местах файла. -->

<?php
echo include_file('week_days.php');
?>


<br>
<br>
<!-- Сделайте файл с полезным набором функций. Подключите его к вашему основному файлу. -->
<?php
// require "include_func.php";
// var_dump(twoNum(16, 8));
?>


<br>
<br>
<!-- Сделайте файл, который будет возвращать названия месяцев. Подключите его в переменную в вашем основном файле. -->
<?php

    $month = require "week_days.php";
    echo $month[5];
?>

<br>
<br>

<?php

// $a = 0;
// function second($a) { 

//     if($a >= 5 and $a <= 20) {
//         echo $a . " сенкунд" . "<br>";
//     } elseif( substr($a, (mb_strlen($a) - 1)) == 1) {
//         echo $a . " сенкунда" . "<br>";
//     } elseif( (substr($a, (mb_strlen($a) - 1)) >= 2 and substr($a, (mb_strlen($a) - 1)) <= 4) ) {
//         echo $a . " сенкунды" . "<br>";
//     } else {
//         echo $a . " сенкунд" . "<br>"; 
//     }
// }
// while($a < 60) {
//     second($a++);
// }
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>