<?php
    session_start();
    $_SESSION['a'] = 10;
    $_SESSION['b'] = 11;
    ?>

    <!-- Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. -->

<?php
session_start();
if(empty($_SESSION['time_back'])) {
    $_SESSION['time_back'] = time();
} else {
   echo time() - $_SESSION['time_back'];  
} 
?>

<br>
<br>
<!-- Модифицируйте этот код счетчика так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала. -->
<?php
session_start();
if(empty($_SESSION["counter"])) {
    $_SESSION["counter"] = 1;
} else {
    $_SESSION["counter"]++;
    if($_SESSION["counter"] > 10) {
        unset($_SESSION["counter"]);
    }
}
echo $_SESSION["counter"]; 
?>


<br>
<br>
<!-- На одной странице с помощью формы спросите у пользователя фамилию, имя и возраст. Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран. -->
<?php
session_start();
if(!empty($_GET)) {
    $_SESSION["last_name"] = $_GET["last_name"];
    $_SESSION["name"] = $_GET["name"];
    $_SESSION["age"] = $_GET["age"];
}
?>

<form action="" method="GET">
    <span>Введите вашу фамилию:</span> <input type="text" name="last_name"><br>
    <span>Введите ваше имя:</span> <input type="text" name="name"><br>
    <span>Введите ваш возраст:</span> <input type="text" name="age"><br>
    <input type="submit">
</form>


<br>
<br>
<!-- На одной странице с помощью формы спросите у пользователя имя, возраст, зарплату и еще что-нибудь. Запишите эти данные в одну переменную сессии в виде массива. При заходе на другую страницу переберите сохраненные данные циклом и выведите каждый элемент массива в своем теге li тега ul. -->
<?php
session_start();
if(!empty($_GET)) {
$_SESSION["arr"] = $_GET;
}
?>

<form action="" method="GET">
    <span>Введите ваше имя:</span> <input type="text" name="name_1"><br>
    <span>Введите ваш возраст:</span> <input type="text" name="age_1"><br>
    <span>Введите вашу зарплату:</span> <input type="text" name="salary_1"><br>
    <span>Введите вашего питомца:</span> <input type="text" name="animal_1"><br>
    <input type="submit">
</form>
