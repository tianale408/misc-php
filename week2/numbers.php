<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/11/2018
 * Time: 11:34 AM
 */

$a = 1.2e3; //1200
$b = 2.34e-2; //2.34 X 1 over 100 .0234

echo $a . " " . $b . "<br>";

$a = 0.1;
$b = 0.7;
$c = ($a + $b) * 10;

echo (int)($c + 0.000000009);

$an_int_value1 = 5;
$an_int_value2 = 7;
$a_float_value1 = 23.4;
$a_float_value2 = 6.2;

echo 'a / b (integer) = ' . ($an_int_value1 / $an_int_value2) . '<br>';
echo 'a / b (float) = ' . ($a_float_value1 / $a_float_value2) . '<br>';

echo 'a + b (integer) = ' . ($an_int_value1 + $an_int_value2) . '<br>';
echo 'a + b (float) = ' . ($a_float_value1 + $a_float_value2) . '<br>';

echo 'a * b (integer) = ' . ($an_int_value1 * $an_int_value2) . '<br>';
echo 'a * b (float) = ' . ($a_float_value1 * $a_float_value2) . '<br>';

echo 'a - b (integer) = ' . ($an_int_value1 - $an_int_value2) . '<br>';
echo 'a - b (float) = ' . ($a_float_value1 - $a_float_value2) . '<br>';

echo 'a % b (integer) = ' . ($an_int_value1 % $an_int_value2) . '<br>';
echo 'a % b (float) = ' . ($a_float_value1 % $a_float_value2) . '<br>';

echo 'a + b (float + integer) = ' . ($a_float_value1 + $an_int_value2) . '<br>';

echo 2 ** 3 . '<br>';
echo pow(2, 3) . '<br>';

echo 16 ** 0.5 . '<br>';

echo 8 ** (1 / 3) . '<br>';

echo "a is " . $a . "<br>";
$a = $a + 2;
$a += 2;
$a *= 2;
$a /= 2;
$a %= 5;
echo "a is " . $a . "<br>";

$a++;
$a += 1;
$a = $a + 1;
$a--;
$a -+ 1;
$a = $a - 1;
echo "a is " . $a . "<br>";
++$a;
echo 'a = ' . $a++ . "<br>" . "now a = " . $a . "<br>";
echo 'a = ' . $a-- . "<br>" . "now a = " . $a . "<br>";













