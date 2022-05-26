<?php
$test = mysqli_connect('localhost', 'mysql', 'mysql', 'test');
?>

<!-- Реализуйте просмотр юзера с помощью следующей верстки:
<div>
	<p>
		имя: <span class="name">user1</span>
	</p>
	<p>
		возраст: <span class="age">23</span>,
		зарплата: <span class="salary">400$</span>,
	</p>
</div> -->
<?php
$id = $_GET['id'];
$users = "SELECT * FROM users WHERE id=$id";
$show_users = mysqli_query($test, $users);
for($arr=[]; $row = mysqli_fetch_assoc($show_users); $arr[] = $row);
?>

<?php foreach($arr as $elem) {?>
<div>
	<p>
		имя: <span class="name"> <?= $elem['name'] ?> </span>
	</p>
	<p>
		возраст: <span class="age"> <?= $elem['age'] ?>  </span>,
		зарплата: <span class="salary"> <?= $elem['salary'] ?>  $</span>
	</p>
</div> 

<?php } ?>

<a href="related_tables.php">назад</a>