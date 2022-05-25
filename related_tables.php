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