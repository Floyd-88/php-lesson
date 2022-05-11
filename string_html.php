<!-- Даны три переменные:

<?php
	$src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';
?>
Сформируйте с помощью этих переменных три тега img. -->

<?php
	$src1 = 'https://www.imgonline.com.ua/examples/bee-on-daisy.jpg';
    $src2 = 'https://st2.depositphotos.com/1064024/10769/i/600/depositphotos_107694484-stock-photo-little-boy.jpg';
    $src3 = 'https://www.ixbt.com/img/n1/news/2021/10/2/22459ff25f8eff76bddf34124cc2c85b16f4cd4a_large.jpg';

    echo "<img height = '100' src=\"$src1\" alt=\"111\"> <br>";
    echo "<img height = '100' src=\"$src2\" alt=\"222\"> <br>";
    echo "<img height = '100' src=\"$src3\" alt=\"333\"> <br>";


?>

<br>
<br>
<!-- С помощью цикла сформируйте следующий HTML код:

<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul> -->
<?php
for($i=1; $i<=5; $i++) {
    echo "<ul> <li>$i</li> </ul>";
}
?>


<br>
<br>
<!--
Дан следующий массив:
	$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
?>
Сформируйте с его помощью следующий HTML код:
<ul>
	<li><a href="page1.html">text1</a></li>
	<li><a href="page2.html">text2</a></li>
	<li><a href="page3.html">text3</a></li>
</ul> -->

<?php
$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
    foreach($arr as $elem) {
        echo "<ul><li><a href=\" $elem[href] \">$elem[text]</a></li></li></ul>";

    }
?>


<br>
<br>
<!-- Дан следующий массив:
<?php
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
?>
Сформируйте с его помощью HTML таблицу. -->
<?php
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];

echo "<table>";
foreach($products as $elem) {
echo "<tr>";
foreach($elem as $key => $row) {
    if($key === "price") {
        $row = "$$row"; 
    }
    echo "<td>$row</td>";
}
echo "</tr>";
}
echo "</table>";
?>


<br>
<br>
<!-- <?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
    ?>
    Также даны три абзаца:
    
    <p></p>
    <p></p>
    <p></p>
    Выполните вставку элементов массива в соответствующие абзацы. -->

    <?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
    ?>
    <p> <?php echo $arr['a'];  ?> </p>
    <p> <?= $arr['b'];  ?> </p>
    <p> <?= $arr['c'];  ?></p>


<br>
<br>
    <!-- <?php
	$show = true;
    ?>
    Дан код:
    
    <div>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    </div>
    Выведите приведенный HTML код, если переменная show равна true. -->

<?php
	$show = true;
?>
<?php if($show) { ?>
<div>
    <p>text1</p>
    <p>text2</p>
    <p>text3</p>
</div>
<?php } ?>

<?php
if($show) { 

 echo "<p>text1</p>";
   echo "<p>text2</p>";
    echo "<p>text3</p>";
}
?>



<br>
<br>
<!-- Дана переменная:
<?php
	$show = true;
?>
Дан код:

<div>
	<p>text+</p>
	<p>text+</p>
	<p>text+</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
Выведите первый див, если переменная show равна true, и второй див, если переменная равна false. -->
<?php
	$show = false;
?>

<?php if($show) { ?>
    <p>text+</p>
	<p>text+</p>
	<p>text+</p>
<?php } else { ?>
    <p>text-</p>
	<p>text-</p>
	<p>text-</p>
    <?php } ?>



<br>
<br>
    <!-- Даны дивы:

<div>
	<p>text1</p>
	<p>text1</p>
	<p>text1</p>
</div>
<div>
	<p>text2</p>
	<p>text2</p>
	<p>text2</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
Сделайте условие, которое будет показывать один из дивов. -->

<?php
	$show = 3;
?>

<?php if($show === 1) { ?>
    <div>
	<p>text1</p>
	<p>text1</p>
	<p>text1</p>
</div>
<?php } elseif ($show === 2) {?>
    <div>
	<p>text2</p>
	<p>text2</p>
	<p>text2</p>
</div>
<?php } else { ?>
    <div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
<?php } ?>


<br>
<br>
<!-- Сформируйте с помощью цикла следующий HTML код:

<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul> -->
<ul>
<?php for($i=1; $i<=5; $i++) { ?>
    <li> <?php echo $i ?> </li>
    <?php } ?>
</ul>



<br>
<br>
<!-- <?php
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>
С помощью этого массива и цикла сформируйте следующий HTML код:
<div>
	<p>name: user1</p>
	<p>age: 30</p>
</div>
<div>
	<p>name: user2</p>
	<p>age: 31</p>
</div>
<div>
	<p>name: user3</p>
	<p>age: 32</p>
</div> -->

<?php
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>

<?php foreach($arr as $elem) { ?>
   <?php foreach($elem as $key => $elem2) { ?>
    <div>
        <p> <?php echo $key . ": " . $elem2; ?> </p> 
    </div>
    <?php } ?>
    <?php } ?>

    