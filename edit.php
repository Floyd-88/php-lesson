<!-- Реализуйте страницу edit.php для редактирования юзера. -->
<?php
$test = mysqli_connect('localhost', 'mysql', 'mysql', 'test');

$id=$_GET['id'];
$editing_user = "SELECT * FROM users WHERE id=$id";
if(!empty($_GET['id'])){
$show_user = mysqli_query($test, $editing_user) or die(mysqli_error($editing_user));
$arr = mysqli_fetch_assoc($show_user);
}
?>
<form action="save.php?id=<?= $id ?>" method="POST">
<p>Отредактировать пользователя:</p>
<input  type="text" name="name" value="<?php echo  $arr['name']?>" ><br>
<input  type="text" name="age" value=<?php echo $arr['age']?> ><br>
<input  type="text" name="salary" value=<?php echo $arr['salary']?> ><br>
<input type="submit"><br>
</form>


