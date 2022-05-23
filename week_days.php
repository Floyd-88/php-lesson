<?php
$arr = ["вс", "пн", "вт", "ср", "чт", "пт", "сб"];
?>
<select name="week">
    <?php foreach($arr as $elem) { ?>
            <option > <?php echo $elem ?> </option>
        <?php }?>
  
</select>

<?php
$arr = ["ян", "фв", "мт", "ап", "май", "ин", "ил", "ав", "сен", "ок", "ноя", "дек"];
return $arr;
?>