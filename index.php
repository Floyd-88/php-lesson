<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lesson</title>
</head>
<body>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
    ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');

    // include 'session_1.php';
	// include 'session_2.php';
?>

<!-- На странице index.php сделайте форму. Отправьте ее на страницу result.php. Проверьте оба метода отправки формы. -->

<!-- <form action="/form.php" method="POST">
<input name="name_user" placeholder="Имя пользователя">
<input name="age" placeholder="Возраст">
<input name="salary" placeholder="Зарпата">
<input type="submit">
</form> -->

<a href="session_1.php">session_1</a>
<a href="session_2.php">session_2</a>
<a href="logout.php">обнулить все сессии</a>
	
</body>
</html>
