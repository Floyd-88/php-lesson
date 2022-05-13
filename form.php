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
    
<!-- Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя. После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь. -->

<form action="" method="GET">
<input type="checkbox" name="hello" >
<input type="text"   placeholder="Ваше имя..." name="name_hello" value="<?= $_GET["name_hello"] ?? "" ?>">
<input type="submit">
</form>
<?php if(!empty($_GET["name_hello"])) { ?>
    <?php if(isset($_GET["hello"])) { ?>
    <p>Hello, <?php echo $_GET["name_hello"] ?></p>
        <?php } else {?>
            <p>Buy, <?php echo $_GET["name_hello"] ?> </p>
            <?php } ?>
    <?php } ?>



    <!-- С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет. Если есть, разрешите ему доступ на сайт, а если нет - не разрешите. -->
    <form action="" method="GET">
    <span>Вам есть уже 18?</span>    
    <input type="hidden" name="age_stop" value="0">
    <input type="checkbox" name="age_stop" value="4" <?php if(!empty($_GET["age_stop"])) echo "checked"  ?> > <br>
    <input type="submit">
    </form>

    <?php
    if(!empty($_GET) and $_GET["age_stop"]) {
        if($_GET["age_stop"] === "4") {
            echo "Добро пожаловать";
        } else {
            echo "Вам отказано";
        }
    }
    ?>



    <br>
    <br>
    <!-- Сделайте три чекбокса, которые будут сохранять свое значение после отправки. -->
    <form action="" method="GET">
    <p>Выберите любимые напитки</p>  
    
    <span>Чай</span>  
    <input type="hidden" name="drink_tea" value="">
    <input type="checkbox" name="drink_tea" value="Чай" <?php if(!empty($_GET["drink_tea"]) and $_GET["drink_tea"] === "Чай") echo "checked"  ?> > <br>
    
    <span>Молоко</span>
    <input type="hidden" name="drink_milk" value="">
    <input type="checkbox" name="drink_milk" value="Молоко" <?php if(!empty($_GET["drink_milk"]) and  $_GET["drink_milk"] === "Молоко") echo "checked"  ?> > <br>
    
    <span>Кофе</span>
    <input type="hidden" name="drink_coffee" value="">
    <input type="checkbox" name="drink_coffee" value="Кофе" <?php if(!empty($_GET["drink_coffee"]) and $_GET["drink_coffee"] === "Кофе") echo "checked"  ?> > <br>
    <input type="submit">
    </form>

    <?php
    if(!empty($_GET)) {
      $str = "Вы любите ";
      $result = $str . $_GET["drink_tea"] . " " . $_GET["drink_milk"] . " ". $_GET["drink_coffee"];
      echo $result;
    }
    ?>

<br>
<br>
    <!-- С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран. -->

<form action="" method="GET">
    <p>Выбирете Ваш пол:</p>
<input type="radio" name="sex" checked value="man" <?php if( !empty($_GET["sex"]) and $_GET["sex"] === "man") echo "checked" ?> > <span>man</span> <br>
<input type="radio" name="sex" value="woman" <?php if(!empty($_GET["sex"]) and $_GET["sex"] === "woman") echo "checked" ?> > <span>woman</span> <br>
<input type="submit">
</form>

<?php if(!empty($_GET["sex"])) { 
    if($_GET["sex"] === "man") {?>
    <p>Вы мужчина</p>
    <?php } else { ?>
        <p>Вы женщина</p>
        <?php }
        } ?>


<br>
<br>
<!-- С помощью переключателей попросите пользователя выбрать его язык. Сделайте так, чтобы выбор не пропадал после отправки формы. -->
<form action="" method="GET">
    <p>Выбирете свой язык:</p>
<input type="radio" name="language" checked value="ru" <?php if( !empty($_GET["language"]) and $_GET["language"] === "ru") echo "checked" ?> > <span>русский</span> <br>
<input type="radio" name="language" value="en" <?php if(!empty($_GET["language"]) and $_GET["language"] === "en") echo "checked" ?> > <span>английский</span> <br>
<input type="radio" name="language" value="ch" <?php if(!empty($_GET["language"]) and $_GET["language"] === "ch") echo "checked" ?> > <span>китайский</span> <br>
<input type="submit" name="go">
</form>

<?php if(!empty($_GET["language"])) { 
    if($_GET["language"] === "ru") {?>
    <p>Вы выбрали русский</p>
    <?php } elseif($_GET["language"] === "en") { ?>
        <p>Вы выбрали английский</p>
        <?php } else { ?>
            <p>Вы выбрали китайский</p>
            <?php }
            } ?>



<br>
<br>
<!-- С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет. -->

<form action="" method="GET">
<select name="country">
<option value="Russia" <?php if( !empty($_GET["country"]) and $_GET["country"] === "Russia") echo "selected" ?> >Russia</option>
<option value="USA" <?php if( !empty($_GET["country"]) and $_GET["country"] === "USA") echo "selected" ?>>USA</option>
<option value="Germany" <?php if( !empty($_GET["country"]) and $_GET["country"] === "Germany") echo "selected" ?> >Germany</option>

<input type="submit">
</select>
</form>

<?php if(!empty($_GET["country"])) { 
    if($_GET["country"] === "Russia") {?>
    <p>Вы живете в России</p>
    <?php } elseif($_GET["country"] === "USA") { ?>
        <p>Вы живете в США</p>
    <?php } elseif($_GET["country"] === "Germany") { ?>
        <p>Вы живете в Германии</p>
        <?php }
        } ?>


<br>
<br>
<!-- Отправьте с помощью GET-запроса число. Выведите его на экран. -->
<?php
if(!empty($_GET["par1"])) { 
if($_GET["par1"] === "1") {
    echo "Hello";
} elseif($_GET["par1"] === "0") {
    echo "By";
    }
}
?>


<br>
<br>
<!-- Дан массив:
<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
Пусть с помощью GET-запроса можно передать число. Сделайте так, чтобы на экран вывелся элемент массива с переданным в запросе номером. -->
<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
    if(!empty($_GET["par1"])) { 
    echo $arr[$_GET["par1"]];
    }
?>


<br>
<br>
<!-- Сделайте три ссылки. Пусть первая передает число 1, вторая - число 2, третья - число 3. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число. -->
<a href="?num1=1">link_1</a>
<a href="?num1=2">link_2</a>
<a href="?num1=3">link_3</a>

<br>
<?php
if(!empty($_GET["num1"])) { 
if($_GET["num1"] === "1") {
    echo "1";
} elseif($_GET["num1"] === "2") {
    echo 2;
} elseif($_GET["num1"] === "3") {
    echo 3;
}
}
?>


<br>
<br>
<!-- Сформируйте в цикле 10 ссылок. Пусть каждая ссылка передает свое число. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число. -->
<?php for($i=1; $i<=10; $i++) { ?>
<a href="?num2=<?php echo $i ?>">Ссылка_<?php echo $i ?></a> <br>
<?php if(!empty($_GET["num2"])) {
if($_GET["num2"] == $i) { ?>
    <p><?php echo $i ?></p>
    <?php } ?>
<?php } 
}?>


<br>
<br>
<!-- 
Дан массив:    
$arr = ['a', 'b', 'c', 'd', 'e'];
Сделайте так, чтобы с помощью GET запроса можно было вывести любой элемент этого массива. Для этого с помощью цикла foreach сделайте ссылку для каждого элемента массива. -->
<?php 
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach($arr as $elem) { ?>
<a href="?num3=<?php echo $elem ?>">Ссылка_<?php echo $elem ?></a> <br>
<?php if(!empty($_GET["num3"])) {
if($_GET["num3"] == $elem) { ?>
    <p><?php echo $elem ?></p>
    <?php } ?>
<?php } 
}?>


<br>
<br>
<!-- Напишите скрипт, который будет преобразовывать температуру из градусов Цельсия в градусы Фарингейта. Для этого сделайте инпут и кнопку -->
<form action="" method="GET">
    <p>Переводить градусы Цельсия в Фарингейты:</p>
<input name="cels" value=<?php if( !empty($_GET["cels"])) echo $_GET["cels"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["cels"])) { ?>
    <p> Градусов Фаренгейтов: <?php echo (9 / 5 * ($_GET["cels"])) + 32; ?> </p>
<?php }?>


<br>
<br>
<!-- Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат. -->
<form action="" method="GET">
    <p>Вычислить факториал числа:</p>
<input name="fact" value=<?php if( !empty($_GET["fact"])) echo $_GET["fact"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["fact"])) { ?>
    <p> Факториал равен: <?php 
    $result = 1;
        for($i=1; $i <= $_GET["fact"]; $i++) {
            $result *= $i;
        }
        echo $result;
        ?> </p>
<?php }?>


<br>
<br>
<!-- Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа. -->
<form action="" method="GET">
    <p>Список делителей:</p>
<input name="divider" value=<?php if( !empty($_GET["divider"])) echo $_GET["divider"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["divider"])) { ?>
    <ul> Список делителей: <?php 
    $result = 1;
        for($i=2; $i < $_GET["divider"]; $i++) {
            if($_GET["divider"] % $i === 0) { ?>
                <li> <?php echo $i . " "; ?> </li>
    <?php  }
        }
        ?> </ul>
<?php }?>


<br>
<br>
<!-- Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел. -->
<form action="" method="GET">
    <p>Список общих делителей:</p>
<input name="divider1" value=<?php if( !empty($_GET["divider1"])) echo $_GET["divider1"] ?>>
<input name="divider2" value=<?php if( !empty($_GET["divider2"])) echo $_GET["divider2"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["divider1"]) and !empty($_GET["divider2"])) { ?>
    <ul> <?php 
    $arr1 = [];
    $arr2 = [];
    $result =[];
        for($i=2; $i < $_GET["divider1"], $i < $_GET["divider2"]; $i++) {
            if($_GET["divider1"] % $i === 0) {
                $arr1[] = $i;
            };
             if($_GET["divider2"] % $i === 0) {
                 $arr2[] = $i;
             }; 
            }
            $result = array_intersect($arr1, $arr2);
            foreach(array_unique($result) as $elem) { ?>
                <li>  <?php echo $elem ?> </li>
        <?php } ?>           
    <?php  } ?> 
</ul>



<br>
<br>
<!-- Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения. -->
<form action="" method="GET">
    <p>Найти корни квадратного уровнения:</p>
<input name="root_1" value=<?php if( !empty($_GET["root_1"])) echo $_GET["root_1"] ?>>
<input name="root_2" value=<?php if( !empty($_GET["root_2"])) echo $_GET["root_2"] ?>>
<input name="root_3" value=<?php if( !empty($_GET["root_3"])) echo $_GET["root_3"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["root_1"]) and !empty($_GET["root_2"]) and !empty($_GET["root_3"])) { ?>
    <p> <?php 
            $a = $_GET["root_1"];
            $b = $_GET["root_2"];
            $c = $_GET["root_3"];
            $d =  ($b * $b) - (4 * $a * $c);
            $result_1 = 0;
            if($d > 0) {
                $result_1 = (-$b + sqrt($d)) / (2 * $a);
                $result_2 = (-$b - sqrt($d)) / (2 * $a);
                echo $result_1 . ", " . $result_2;
            }
            elseif($d = 0) {
                $result = (-$b + sqrt($d)) / (2 * $a);
                echo $result_1;
            } else {
                echo "Уравнение не имеет корней";
            }
           
        ?> 
    </p>
            <?php } ?>


<br>
<br>
<!-- Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '01.12.1990'. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя. -->
<form action="" method="GET">
    <p>Количество дней до дня рождения:</p>
<input type="date" name="birthday" value=<?php if( !empty($_GET["birthday"])) echo $_GET["birthday"] ?>>
<input type="submit">
</form>
<?php if(!empty($_GET["birthday"])) { ?>
    <p> <?php 
           $date_1 = strtotime($_GET[ "birthday"]);
           $date_2 = time();
           $result = ceil(($date_1 - $date_2) / (3600 * 24));
           echo $result;
        ?> 

    </p>
            <?php } ?>


<br>
<br>
<!-- Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов и количество символов в тексте. -->
<form action="" method="GET">
    <p>Количество слов и символов в тексте:</p>
    <textarea name="abc" cols="30" rows="10" ><?= $_GET["abc"] ?? '' ?></textarea>
<input type="submit">
</form>
<?php if(!empty($_GET["abc"])) { ?>
    <p> количество слов:<?php 
            $str = $_GET["abc"];
            $arr = explode(" ", $str);
            echo count($arr);
        ?> 

    </p>
    <p> количество символов:<?php 
            echo mb_strlen($str);

        ?> 

    </p>
            <?php } ?>


<br>
<br>
<!-- Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте. -->
<form action="" method="GET">
    <p>Процентное содержание сиволов в тексте:</p>
    <textarea name="share_abc" cols="30" rows="10" ><?= $_GET["share_abc"] ?? '' ?></textarea>
<input type="submit">
</form>
<?php if(!empty($_GET["share_abc"])) { ?>
    <p> <?php 
        $str = str_replace(" ", "", $_GET["share_abc"]);
        $num = mb_strlen($str);
        $arr = array_count_values(str_split($str));
        foreach($arr as $key => $elem) {
            echo $key . " - " . round($elem / $num * 100, 2) . " "; 
        }
      
        ?> 

    </p>
            <?php } ?>


<br>
<br>
<!-- Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы от января до декабря, а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате. -->
<form action="" method="GET">
    <select name="date_week_1">
        <?php for($i=1; $i<=31; $i++) {?>
        <option value="<?php echo $i ?>" <?php if(!empty($_GET["date_week_1"]) and $_GET["date_week_1"] === "$i") echo "selected" ?> > <?php echo $i ?> </option>
        <?php } ?>
    </select>
    <select name="date_week_2">
    <?php for($i=1; $i<=12; $i++) {?>
        <option value="<?php echo $i ?>" <?php if(!empty($_GET["date_week_2"]) and $_GET["date_week_2"] === "$i") echo "selected" ?> > <?php echo $i ?> </option>
        <?php } ?>
    </select>
    <select name="date_week_3">
    <?php for($i=1990; $i<=2025; $i++) {?>
        <option value="<?php echo $i ?>" <?php if(!empty($_GET["date_week_3"]) and $_GET["date_week_3"] === "$i") echo "selected" ?> > <?php echo $i ?> </option>
        <?php } ?>
    </select>
    <input type="submit">
</form>

<?php
if(!empty($_GET["date_week_1"]) and !empty($_GET["date_week_2"]) and !empty($_GET["date_week_3"]))  {
$arr = ["вс", "пн", "вт", "ср", "чт", "пт", "сб"];
echo $arr[date("w", mktime(0, 0, 0, (int) $_GET["date_week_2"], (int) $_GET["date_week_1"], (int) $_GET["date_week_3"]))];
}
?>
