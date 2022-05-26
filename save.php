<!-- Реализуйте страницу edit.php для редактирования юзера. -->
<?php
$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$test = mysqli_connect('localhost', 'mysql', 'mysql', 'test');
$update_user = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id='$id'";
mysqli_query($test, $update_user) or die(mysqli_feth_assoc($update_user));
?>

<?php
echo "Данные отредактированы!!!" . "<br>"
?>
<a href="related_tables.php">назад на страницу</a>