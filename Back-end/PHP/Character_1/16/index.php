<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($arr as $value) {
    if ($value % 3 == 0) {
        echo "<pre>";
        echo $value;
    }
}

$arv = ['name' => 'Sasha', 'age' => 24];
foreach ($arv as $key => $value) {
 echo "<pre>";
 echo "my {$key} is {$value}";
}

