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
if(!empty($_GET['name'])) {
    echo $_GET['name'] . ' ' . $_GET['last_name'] . ' ' . $_GET['two_name']; 
    }?>  
</p>





<!-- С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите. -->
<?php if( empty($_POST['name'])) { ?>
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




<!-- С помощью формы спросите город и страну пользователя. После отправки формы выведите введенные данные на экран. Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы. -->
<form action="" method="POST">
<input name="city" placeholder="city" value=<?php if(!empty($_POST["city"])) echo trim($_POST["city"]) ?>>
<input name="country" placeholder="country" value=<?php if(!empty($_POST["country"]))  echo trim($_POST["country"]) ?>>
<input type="submit">
</form>

 <?php 
    if( !empty($_POST['city'])){
    echo "Your city: " . trim($_POST['city']) . "!" . "<br>"; 
    }?>  

<?php 
if(!empty($_POST['country'])) {
    echo "Your country: " . trim($_POST['country']) . "!";
} ?>  




<!-- С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год. -->
<form action="" method="POST">
<p>Проверяет високосный год:</p>
<input type="text" name="year" value=<?php if( !empty($_POST["year"])) {echo $_POST["year"];
}else {echo date("Y");
} ?> >
<input type="submit">
</form>

<?php if(!empty($_POST["year"])) { ?>
<?php $year = mktime(0, 0, 0, 1, 1, $_POST["year"]);
    if(date("L", $year) == 1) { ?>
    <p> "Вы ввели високосный год"</p>
    
<?php } else { ?>
    <p> "Этот год не високосный"</p>
<?php } ?>
<?php } ?>

<!-- С помощью трех инпутов спросите у пользователя год, месяц и день. После отправки формы выведите на экран, сколько дней осталось от введенной даты до Нового Года. По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата. -->
<form action="" method="POST">
<input name="happy_year" value="<?= $_POST["happy_year"] ?? date("Y") ?>" >
<input name="happy_month"  value="<?= $_POST["happy_month"] ?? date("m") ?>">
<input name="happy_day"  value="<?= $_POST["happy_day"] ?? date("d") ?>">
<input type="submit">
</form>

<?php if(!empty($_POST["happy_year"])) { ?>
<p>До Нового Года осталось <?php 
echo round((mktime(23, 59, 59, 12, 31, date("Y")) - mktime(0, 0, 0, $_POST["happy_month"], $_POST["happy_day"], $_POST["happy_year"])) / 86400)  ?> дней!</p>
<?php } ?>



<!-- Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран. -->

<form action="" method="POST">
    <p>Оставьте отзыв:</p>
    <textarea name="comments" cols="30" rows="10"><?= $_POST["comments"] ?? '' ?></textarea> <br>
    <input type="submit">
</form>

<?php if(!empty($_POST["comments"])) { ?>
    <p><?php
        echo $_POST["comments"];
    ?> </p>
    <?php } ?>




    <!-- Пусть в textarea вводится русский текст. После отправки формы выведите на экран транслит этого текста. Сделайте так, чтобы содержимое формы сохранялось после отправки. -->
<?php 

function translit($value)
{
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
 
		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
	);
 
	$value = strtr($value, $converter);
	return $value;
}
?>

    <form action="" method="POST">
    <p>Оставьте отзыв:</p>
    <textarea name="translit" cols="30" rows="10"><?= $_POST["translit"] ?? '' ?></textarea> <br>
    <input type="submit">
</form>

<?php if(!empty($_POST["translit"])) { ?>
    <p><?php
        echo translit($_POST["translit"]);
    ?> </p>
    <?php } ?>
    
