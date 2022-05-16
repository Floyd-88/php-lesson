<?php
setcookie('birtday', $_GET['my_birtday']);
$_COOKIE['birtday'] = $_GET['my_birtday'];

?>

<form action="" method="GET">
<input type="date" name="my_birtday">
<input type="submit">
</form>

