<?php
echo $_GET['num1'] + $_GET['num2'] + $_GET['num3'];
?>




<br>
<br>
<p>Имя пользователя:
<?php
echo $_POST['name'];
?>
</p>
<p>Возраст пользователя:
<?php
echo $_POST['age'];
?>
</p>




<br>
<br>
<?php
	$pass = '12345';
?>

<?php if($pass == $_POST['pass']) {?>
    <p>Добро пожаловать!</p>
<?php } else { ?>
<p>Пароль неверный, попробуйте еще раз.</p>
<?php } ?>



<br>
<br>
<?php
$arr = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$birth = mktime(0, 0, 0, $_POST["month"], $_POST["day"], $_POST["year"]);
$day_week = $arr[date(w, $birth)];
?>
<p>Вы родились в 
<?php echo $day_week ?> </p>
