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