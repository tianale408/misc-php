<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/23/2018
 * Time: 12:52 PM
 */


define('NUMBER', 'number');

if (!isset($_GET[NUMBER])) {
    echo '<h1>YOU must supply a number!</h1>';
    exit;
}
$number = $_GET[NUMBER];
if (!is_numeric($number)) {
    echo'<h1>A numeric value must be supplised for a number!</h1>';
    exit;
}

for ($candidate = 2; $candidate < $number; $candidate++) {
    if ($number % $candidate ==0) {
        break;
    }
}

if ($number == $candidate) {
    echo '<h1>' . $number . ' is prime!</h1>';
} else {
    echo '<h1>' . $number . ' is not prime!</h1>';
}