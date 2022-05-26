

<!-- Пусть вам нужно хранить товары (название, цена, количество) и категории этих товаров. Распишите структуру хранения. -->
<?php
$db = mysqli_connect('localhost', 'mysql', 'mysql', 'mydb');
// $shop = 'CREATE TABLE shop (id INT PRIMARY KEY AUTO_INCREMENT, product VARCHAR(30), price DECIMAL(8, 2), amount INT, id_category INT, FOREIGN KEY (id_category) REFERENCES category (id))';
// mysqli_query($db, $shop) or die(mysqli_error($shop));
?>

<?php
// $category = 'CREATE TABLE category (id INT PRIMARY KEY AUTO_INCREMENT, name_category VARCHAR(30))';
// mysqli_query($db, $category) or die(mysqli_error($category));

// mysqli_query($db, 'INSERT INTO category (name_category) VALUES ("овощи")');
// mysqli_query($db, 'INSERT INTO category (name_category) VALUES ("фрукты")');
// mysqli_query($db, 'INSERT INTO category (name_category) VALUES ("десерты")');
?>

<?php
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("помидоры", "250.30", "20", "1")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("бананы", "150.30", "45", "2")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("сливы", "300.25", "57", "2")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("огруцы", "320.50", "20", "1")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("печенье", "400.70", "70", "3")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("торты", "750.20", "15", "3")');
// mysqli_query($db, 'INSERT INTO shop (product, price, amount, id_category) VALUES ("абрикосы", "420.00", "80", "2")');
?>



<br>
<br>
<!-- Пусть вам нужно хранить города и страны, в которых они находятся. Распишите структуру хранения. -->
<?php
// $country = 'CREATE TABLE country (id_country INT PRIMARY KEY AUTO_INCREMENT, name_country VARCHAR(30))';
// mysqli_query($db, $country) or die(mysqli_error($country));

// $city = 'CREATE TABLE city (id INT PRIMARY KEY AUTO_INCREMENT, name_city VARCHAR(30), id_country INT, FOREIGN KEY (id_country) REFERENCES country (id_country))';
// mysqli_query($db, $city) or die(mysqli_error($city));


// mysqli_query($db, 'INSERT INTO country (name_country) VALUES ("Russia")');
// mysqli_query($db, 'INSERT INTO country (name_country) VALUES ("USA")');
// mysqli_query($db, 'INSERT INTO country (name_country) VALUES ("Japan")');

// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("Moscow", "1")');
// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("Stavropol", "1")');
// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("New-York", "2")');
// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("Washington", "2")');
// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("Tokio", "3")');
// mysqli_query($db, 'INSERT INTO city (name_city, id_country) VALUES ("Kioto", "3")');
?>


<br>
<br>
<!-- Пусть у вас есть таблица с товарами и таблица с их категориями. Напишите запрос, который достанет названия товаров вместе с их категориями. -->
<?php
$product_category = 'SELECT shop.product as "Продукты", shop.price as "Цена", shop.amount as "Количество", category.name_category as "Категория" FROM shop LEFT JOIN category ON
shop.id_category = category.id';
$result = mysqli_query($db, $product_category);
for($arr=[]; $row = mysqli_fetch_assoc($result); $arr[] = $row);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Пусть товары принадлежат определенной подкатегории, а подкатегории принадлежат определенной категории. Распишите структуру хранения. -->
<?php
// $type = 'CREATE TABLE type (id INT PRIMARY KEY AUTO_INCREMENT, name_type VARCHAR(30))';
// mysqli_query($db, $type) or die(mysqli_error($type));

// mysqli_query($db, 'INSERT INTO type (name_type) VALUES ("еда")');
// mysqli_query($db, 'INSERT INTO type (name_type) VALUES ("не еда")');
?>
<?php
// $new_type_id = 'ALTER TABLE category ADD FOREIGN KEY (type_id) REFERENCES type (id)';
// mysqli_query($db, $new_type_id) or die(mysqli_error($link));

// mysqli_query($db, 'UPDATE category SET type_id = "1" WHERE id >= 1 AND id <=3');
// mysqli_query($db, 'UPDATE category SET type_id = "2" WHERE id = 4');
?>


<br>
<br>
<!-- Напишите запрос, который достанет товары, вместе с их подкатегориями и категориями. -->
<?php
$show_product = 'SELECT product, name_category, name_type FROM shop 
LEFT JOIN category ON category.id = shop.id_category
LEFT JOIN type ON category.type_id = type.id';
$result_2 = mysqli_query($db, $show_product) or die(mysqli_error($show_product));
for($arr=[]; $row = mysqli_fetch_assoc($result_2); $arr[] = $row);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>


<br>
<br>
<!-- Напишите запрос, который достанет подкатегории вместе с их категориями. -->
<?php
$show_category = 'SELECT name_category, name_type FROM category
LEFT JOIN type ON category.type_id = type.id';
$result_3 = mysqli_query($db, $show_category) or die(mysqli_error($show_category));
for($arr=[]; $row = mysqli_fetch_assoc($result_3); $arr[] = $row);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<br>
<br>
<!-- Выведите полученные данные в виде списка ul так, чтобы в каждой li вначале стояло имя продукта, а после двоеточия через запятую перечислялись категории этого продукта.-->
<?php
// $show_product_2 = 'SELECT product, name_category FROM shop 
// LEFT JOIN category ON shop.id_category = category.id';
// $result_4 = mysqli_query($db, $show_product_2) or die(mysqli_error($show_product_2));
// for($arr = []; $row = mysqli_fetch_assoc($result_4); $arr[] = $row);
// $res=[];
// foreach($arr as $elem) {
//    $res[$elem['name_category']][] = $elem['product']; 
// } 
// echo '<pre>';
// print_r($res);
// echo '</pre>';
?>


<br>
<br>
<!-- Пусть у нас есть категории. Каждая категория может принадлежать родительской категории, та в свою очередь своей родительской и так далее. Распишите структуру хранения. -->
<?php
// $parents = 'CREATE TABLE parents (id INT PRIMARY KEY AUTO_INCREMENT, father_name VARCHAR(30), id_son INT)';
// mysqli_query($db, $parents) or die(mysqli_error($parents));

// $sons = 'CREATE TABLE sons (id_son INT PRIMARY KEY AUTO_INCREMENT, son_name VARCHAR(30), id_father INT, FOREIGN KEY (id_father) REFERENCES parents (id))';
// mysqli_query($db, $sons) or die(mysqli_error($sons));

// $sons_next = 'CREATE TABLE sons_next (id_son_next INT PRIMARY KEY AUTO_INCREMENT, son_next_name VARCHAR(30), id_son INT, FOREIGN KEY (id_son) REFERENCES sons (id_son))';
// mysqli_query($db, $sons_next) or die(mysqli_error($sons_next));

// mysqli_query($db, 'DROP TABLE parents') or die(mysqli_error($parents));
// mysqli_query($db, 'DROP TABLE sons') or die(mysqli_error($sons));
// mysqli_query($db, 'DROP TABLE sons_next') or die(mysqli_error($sons_next));
?>


<br>
<br>
<!-- Напишите запрос, который достанет категорию вместе с ее родительской категорией. -->
<?php
$show3 = 'SELECT son_next_name, son_name FROM sons_next 
INNER JOIN sons USING(id_son)';
$res = mysqli_query($db, $show3) or die(mysqli_error($show3));
for($arr2 = []; $row = mysqli_fetch_assoc($res); $arr2[] = $row);
$new_arr =[];
foreach($arr2 as $elem) {
    $new_arr[$elem['son_name']][] = $elem['son_next_name'];
}
echo '<pre>';
print_r($new_arr);
echo '</pre>';
?>

<br>
<br>
<!-- Напишите запрос, который достанет категорию вместе с ее родителем и прародителем. -->
<?php
$show4 = 'SELECT son_next_name, son_name, father_name FROM sons_next 
RIGHT JOIN sons USING(id_son)
RIGHT JOIN parents ON id_father = parents.id ORDER BY son_name';
$res_2 = mysqli_query($db, $show4) or die(mysqli_error($show4));
for($arr2 = []; $row = mysqli_fetch_assoc($res_2); $arr2[] = $row);
$new_arr2 =[];
$new_arr_son =[];
// foreach($arr2 as $elem) {
//     $new_arr_son[$elem['son_name']][] = $elem['son_next_name'];
//     // $new_arr2[$elem['father_name']][] = $new_arr_son[$elem['son_name']][];
// }
foreach($arr2 as $elem) {
    $new_arr2[$elem['father_name']][] = $elem['son_name'] . " => " . $elem['son_next_name'];
}
echo '<pre>';
print_r($new_arr2);
echo '</pre>';
?>

<!-- Сайт с датами футбольных игр. Каждая игра содержит дату игры, первую команду и вторую команду. Есть игроки, каждый из которых принадлежит одной команде. Составьте структуру таблиц. -->
<?php
$football = mysqli_connect('localhost', 'mysql', 'mysql', 'football_game');

// создает таблицы в базе данных:
$playrs = 'CREATE TABLE playrs (id_playrs INT PRIMARY KEY AUTO_INCREMENT, name_playrs VARCHAR(30))';
// $arr_playrs = mysqli_query($football, $playrs) or die(mysqli_error($playrs));

$teems = 'CREATE TABLE teems (id_teems INT PRIMARY KEY AUTO_INCREMENT, teem VARCHAR(30))';
// $arr_teems = mysqli_query($football, $teems) or die(mysqli_error($teems));

$count_teems = 'CREATE TABLE count_teems (id INT PRIMARY KEY AUTO_INCREMENT, name_teems INT, id_playrs INT, FOREIGN KEY (id_playrs) REFERENCES playrs (id_playrs), FOREIGN KEY (name_teems) REFERENCES teems (id_teems))';
// $teems_count = mysqli_query($football, $count_teems) or die(mysqli_error($count_teems));

$games = 'CREATE TABLE games (id_games INT PRIMARY KEY AUTO_INCREMENT, date_games DATE,  teems_1 INT, teems_2 INT, FOREIGN KEY (teems_1) REFERENCES teems (id_teems), FOREIGN KEY (teems_2) REFERENCES teems (id_teems))';
// $arr_games = mysqli_query($football, $games) or die(mysqli_error($games));

// заполняем таблицы информацией:
$arr_names = ['Сидоров', 'Васин', 'Смолов', 'Глушаков', 'Фернандес', 'Алехин', 'Яшин', 'Акинфеев', 'Романов', 'Филимонов', 'Цимбаларь', 'Анопко'];
// foreach($arr_names as $elem) {
//     $sql = "INSERT INTO playrs (name_playrs) VALUES ('$elem')";
//     mysqli_query($football, $sql) or die(mysqli_error($sql));  
// }

$arr_teems = ['Спартак', 'Зенит', 'ЦСКА', 'Динамо'];
// foreach($arr_teems as $elem) {
//     $sql = "INSERT INTO teems (teem) VALUES ('$elem')";
//     mysqli_query($football, $sql) or die(mysqli_error($sql));  
// }

$arr_count = [['1', '1'], ['1', '2'], ['1', '5'], ['2', '9'], ['2', '7'], ['2', '4'], ['3', '3'], ['3', '6'], ['3', '8'], ['4', '10'], ['4', '11'], ['4', '12']];
// foreach($arr_count as $elem) {
//     $sql_teem = "INSERT INTO count_teems (name_teems, id_playrs) VALUES ('$elem[0]', '$elem[1]')";
//     mysqli_query($football, $sql_teem) or die(mysqli_error($sql_teem));  
// }

$arr_games = [['2022-06-10', '1', '2'], ['2022-07-20', '3', '4'], ['2022-08-5', '4', '1'], ['2022-09-01', '3', '2']];

// foreach($arr_games as $elem) {
//     $sql_games = "INSERT INTO games (date_games, teems_1, teems_2) VALUES ('$elem[0]', '$elem[1]', '$elem[2]')";
//     mysqli_query($football, $sql_games) or die(mysqli_error($sql_games));  
// }

// вывод даты и команд:
$show_football = 'SELECT date_games as "дата игры", (SELECT teem FROM teems WHERE id_teems = teems_1) as "команда_1", (SELECT teem FROM teems WHERE id_teems = teems_2) as "команда_2" FROM games
LEFT JOIN teems ON games.teems_1 = teems.id_teems';

$result = mysqli_query($football, $show_football);
for($arr=[]; $row = mysqli_fetch_assoc($result); $arr[] = $row);
echo '<pre>';
print_r($arr);
echo '</pre>';

// вывод команд и игроков:
$show_playrs = 'SELECT teem as "команда", name_playrs as "игроки" FROM teems
LEFT JOIN count_teems ON id_teems = name_teems
LEFT JOIN playrs USING(id_playrs)';

$result = mysqli_query($football, $show_playrs);
for($arr=[]; $row = mysqli_fetch_assoc($result); $arr[] = $row);
$new_arr = [];
foreach($arr as $elem) {
    $new_arr[$elem['команда']][] = $elem['игроки'];
}
echo '<pre>';
print_r($new_arr);
echo '</pre>';
?>


<br>
<br>
<!-- Выведите записи нашей таблицы в следующем виде:
<div>
	<h2>user1</h2>
	<p>
		23 years, <b>400$</b>
	</p>
</div>
<div>
	<h2>user2</h2>
	<p>
		24 years, <b>500$</b>
	</p>
</div>
<div>
	<h2>user3</h2>
	<p>
		25 years, <b>600$</b>
	</p>
</div> -->
<?php
$test = mysqli_connect('localhost', 'mysql', 'mysql', 'test');
$users = 'SELECT * FROM users';
$show_users = mysqli_query($test, $users) or die(mysqli_error($users));
for($arr=[]; $row = mysqli_fetch_assoc($show_users); $arr[] = $row);
foreach($arr as $elem) {?>
<div>
<h2><?php echo $elem['name'] ?></h2>
<p><?php echo $elem['age'] . ' years' . ', '?> <b> <?php echo $elem['salary'] ?></b> </p>
</div>
<?php } ?>


<br>
<br>
<!-- Выведите записи нашей таблицы в следующем виде:
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<tr>
		<td>1</td>
		<td>user1</td>
		<td>23</td>
		<td>400</td>
	</tr>
	<tr>
		<td>2</td>
		<td>user2</td>
		<td>25</td>
		<td>500</td>
	</tr>
	<tr>
		<td>3</td>
		<td>user3</td>
		<td>23</td>
		<td>500</td>
	</tr>
</table> -->
<?php
foreach($arr as $elem) {?>
<table border=1>
	<tr>
		<th> <?php echo $elem['id'] ?> </th>
		<th> <?php echo $elem['name'] ?> </th>
		<th> <?php echo $elem['age'] ?> </th>
		<th> <?php echo $elem['salary'] ?> </th>
	</tr>
	<tr>
</table> 
<?php } ?>


<br>
<br>
<!-- Выведите записи нашей таблицы в следующем виде:
<ul>
	<li>user1</li>
	<li>user2</li>
	<li>user3</li>
</ul> -->

<?php
foreach($arr as $elem) {?>
<ul>
	<li><?php echo $elem['name'] ?></li>
</ul> 
<?php } ?>


<br>
<br>
<!-- Сделайте так, чтобы в адресной строке можно было отправить GET запрос с id юзера и этот юзер удалялся из БД. -->
<?php
foreach($arr as $elem) {?>
<ul>
	<li><?=$elem['name']?> <a href="?del=<?= $elem['id'] ?>"> удалить </a></li>
</ul>
<?php } ?>

<?php
// $num = $_GET['del'];
// $delet = "DELETE FROM users WHERE id=$num";
// mysqli_query($test, $delet);
?>


<br>
<br>
<!-- Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<tr>
		<td>1</td>
		<td>user1</td>
		<td>23</td>
		<td>400</td>
		<td><a href="?del=1">удалить</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>user2</td>
		<td>25</td>
		<td>500</td>
		<td><a href="?del=2">удалить</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>user3</td>
		<td>23</td>
		<td>500</td>
		<td><a href="?del=3">удалить</a></td>
	</tr>
</table> -->
<table border=1>
<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
<?php foreach($arr as $elem) {?>
	<tr>
		<td> <?php echo $elem['id'] ?> </td>
		<td> <?php echo $elem['name'] ?> </td>
		<td> <?php echo $elem['age'] ?> </td>
		<td> <?php echo $elem['salary'] ?> </td>
        <td> <a href="?del=<?= $elem['id'] ?>">удалить</a></td>
	</tr>
    <?php } ?>
</table> 

<?php
$num = $_GET['del'];
mysqli_query($test, "DELETE FROM users WHERE id=$num");
?>

<br>
<br>
<!-- На странице index.php реализуйте вывод ссылок на просмотр каждого из юзеров: -->

<?php foreach($arr as $elem) {?>
    <a href="show.php?id=<?= $elem['id'] ?>"><?php echo $elem['name'] ?></a> <br>
<?php } ?>

<br>
<br>    
<!-- На странице new.php реализуйте форму для добавления нового юзера. -->
<form action="" method="POST">
<p>Добавить нового пользователя:</p>
<input placeholder="введите имя" type="text" name="name" value=<?php if(!empty($_POST['name'])) echo $_POST['name'] ?>><br>
<input placeholder="введите возраст" type="text" name="age" value=<?php if(!empty($_POST['age'])) echo $_POST['age'] ?>><br>
<input placeholder="введите зарплату" type="text" name="salary" value=<?php if(!empty($_POST['salary'])) echo $_POST['salary'] ?>><br>
<input type="submit"><br>
</form>

<?php
if(!empty($_POST)) {
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];
}
$add = "INSERT INTO users (name, age, salary) VALUES ('$name', '$age', '$salary')";
mysqli_query($test, $add);

?>


<!-- Реализуйте страницу edit.php для редактирования юзера. -->
<br>
<br>
<?php foreach($arr as $elem) { ?>
<a href="edit.php?id=<?= $elem['id'] ?>"> <?php echo $elem['name'] ?></a> <br>
<?php } ?>

<?php
	header('Location: edit.php');
?>