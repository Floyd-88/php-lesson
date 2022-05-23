<?php
function twoNum($num1, $num2) {
    return array_intersect(num5($num1), num5($num2));
}

function num5($num) {
    $arr = [];
    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
?>
