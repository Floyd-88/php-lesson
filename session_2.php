<?php
session_start();
$c = $_SESSION['a'] + $_SESSION['b'];
?>

<?php
echo $c;
?>


<br>
<br>
<?php
echo "Добрый день, " .   $_SESSION["name"] ." ". $_SESSION["last_name"] . ", Ваш возраст " . $_SESSION["age"];   
?>

<br>
<br>
<?php
if(!empty($_SESSION["arr"])) {
foreach($_SESSION["arr"] as $elem) {
    echo $elem . "<br>";
}
}
?>