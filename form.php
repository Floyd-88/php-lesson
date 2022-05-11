<!-- Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел. -->

<form action="/result_form.php" method="GET">
<input name="num1" placeholder="число 1">
<input name="num2" placeholder="число 2">
<input name="num3" placeholder="число 3">
<input type="submit">
</form>



<!-- С помощью формы спросите у пользователя его имя и возраст. После отправки формы выведите эти данные на экран. -->
<form action="/result_form.php" method="POST">
<input name="name" placeholder="имя">
<input name="age" placeholder="возраст">
<input type="submit">
</form>




<!-- Пусть с помощью формы у пользователя спрашивается пароль:

<form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>
Пусть на странице с результатом в переменной хранится правильный пароль:

<?php
	$pass = '12345';
?>
Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет. -->

<form action="/result_form.php" method="POST">
	<input type="password" name="pass" placeholder="password">
	<input type="submit">
</form>



<!-- С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя. После отправки формы определите день недели, в который родился пользователь. -->
<form action="/result_form.php" method="POST">
<input name="year" placeholder="год">
<input name="month" placeholder="месяц">
<input name="day" placeholder="день">
<input type="submit">
</form>



<!-- Спросите у пользователя фамилию, имя и отчество. После отправки формы выведите на экран введенные данные. -->
<form action="" method="GET">
<input name="name" placeholder="имя">
<input name="last_name" placeholder="фамилия">
<input name="two_name" placeholder="отчество">
<input type="submit">
</form>

<p>Добро пожаловать, <?php 
if(!empty($_GET)) {
    echo $_GET['name'] . ' ' . $_GET['last_name'] . ' ' . $_GET['two_name']; 
    }?>  
</p>





<!-- С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите. -->
<?php if( empty($_POST)) { ?>
<form action="" method="POST">
<input name="name" placeholder="имя">
<input type="submit">
</form>
<?php } else { ?>
<p>Hello, <?php 
    echo $_POST['name'] . "!"; 
    ?>  
</p>
<?php } ?>