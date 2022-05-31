<?php
session_start();
?>

<?php
// if(!isset($_COOKIE['count'])) {
// setcookie('count', 1);

// } else {
//     setcookie('count', $_COOKIE['count'] + 1);
// }
?>

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
<?php if(!empty($_SESSION['login'])) {
	echo "Привет, " . $_SESSION['login'] . "<br>"; ?>
	<a href="logout.php">Выйти из своего профиля</a> <br> <br>
<?php } else { ?>
	<a href="login.php">Вам необходимо авторизоваться</a> <br>
	<a href="register.php">или пройти регистрацию!!!</a> <br>
<?php } ?>

<a href="session_1.php">session_1</a> <br>
<a href="session_2.php">session_2</a> <br>
<a href="session_3.php">session_3</a> <br>
<a href="session_4.php">session_4</a> <br>
<a href="cookie_1.php">cookie_1</a> <br>
<a href="cookie_2.php">cookie_2</a> <br>
<a href="cookie_3.php">cookie_3</a> <br>
<a href="cookie_4.php">cookie_4</a> <br>
<a href="cookie_5.php">cookie_5</a> <br>
<?php if(!empty($_SESSION['auth'])) { ?> 
<a href="logout.php">обнулить все сессии</a> <br>
<?php } ?>
<?php
if(isset($_SESSION['success'])) {
	echo $_SESSION['success'];
	}
	$_SESSION['success'] = '';
	
?>
	<a href="profile.php">Профиль пользователя</a> <br>
	<a href="user.php">Все пользователи</a>
</body>
</html>