<?php
    setcookie('my_name', $_GET["my_name"]);
?>

<!-- <?php
if(isset($_COOKIE['date'])) {
    setcookie("date", "", time());
    unset($_COOKIE['test']);
}
?> -->

<?php
echo $_COOKIE['str'];
?>

<form action="" method="GET">
<input type="text" name="my_name">
<input type="submit">
</form>

<!-- <?php
if(!empty($_GET["my_name"])) {
    
}
?> -->