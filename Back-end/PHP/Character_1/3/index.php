<?php
/**
 * Created by PhpStorm.
 * User: aleksandrmyronov
 * Date: 10.09.17
 * Time: 22:49
 */

$audi = ['hp' => '160', 'speed' => '240', 'acceleration' => '6'];
$mercedes = ['hp' => '178', 'speed' => '261', 'acceleration' => '4.3'];
$bmw = ['hp' => '165', 'speed' => '250', 'acceleration' => '5.6'];
$cars = [$audi, $bmw, $mercedes];
echo "<pre>";
print_r($cars);