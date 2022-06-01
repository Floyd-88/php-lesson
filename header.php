<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<title>Header</title>
</head>
<body>
<?php
	// error_reporting(E_ALL);
	// ini_set('display_errors', 'on');
    // ini_set('display_errors', 'on');
	// mb_internal_encoding('UTF-8');
    // include 'session_1.php';
	// include 'session_2.php';
?>
<header>
<nav>
	<ul class="nav_menu">

        <li>
		<a href="index.php">На главную</a>
		</li>

		<li>
		<a href="profile.php?id=<?= $_SESSION['id'] ?>">Профиль пользователя</a>
		</li>

		<li>
		<a href="user.php">Все пользователи</a>
		</li>

        <li>
		<?php if(!empty($_SESSION['login'])) { ?>
	<div class="status">
		<p class="nav_menu_hello">
		<?php echo "Пользователь: " . $_SESSION['login']; ?>
		</p>
		<p class="nav_menu_hello">
		<?php echo "Статус: " . $status = (!empty($_SESSION['status'])) ? $_SESSION['status']: 'user'; ?>
		</p>
	</div>
	<!-- <a href="logout.php">Выйти из своего профиля</a> <br> <br> -->
<?php } else { ?>
	<div class="nav_menu_reg">
	<a href="login.php">авторизуйтесь</a>
	<p>или</p>
	<a href="register.php">пройдите регистрацию</a>
	</div>
<?php } ?>
		</li>

        <li>
		<?php 
        if($_SESSION['status'] === 'admin') { ?>
            <a href="admin.php">Перейти на панель администратора</a> <br>
<?php }  ?>
		</li>

		<li>
		<?php if(!empty($_SESSION['login'])) { ?>
		<a href="logout.php">Выйти</a> <br> <br>
		<?php } ?>
		</li>

	</ul>
</nav>
</header>


</body>
</html>