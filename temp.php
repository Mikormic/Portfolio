<?php
$arr = $_GET['la'];
$array = explode(' ', $arr);
for ($i = 0; $i < count($array); $i++) {
    $array[$i] = intval($array[$i]);
}