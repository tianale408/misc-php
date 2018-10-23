<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/10/2018
 * Time: 6:37 PM
 */

$first_way = "this is some text \n";
echo $first_way;

$second_way = "this is some other text which includes $first_way.\n here is some fun";



echo $second_way;

$first_name = "Tiana";
$full_name = $first_name;
$last_name = "haha";
$full_name .= ' ' . $last_name;

echo "<br> Your name is $full_name.";

$text = "here iS A PHRASE lol";
echo "ucfirst: " . ucfirst($text) . "<br>";
echo "lcfirst: " . lcfirst($text) . "<br>";
echo "ucwords: " . ucwords($text) . "<br>";
echo "ucwords(lower(text)):" . ucwords(strtolower($text)) . "<br>";
echo "strtoupper(text):" . strtoupper($text) . "<br>";

echo "ASCII value of 'H' is: " . ord($text[0]) . "<br>";
echo "The character with ASCII value 95 is: " . chr(65) . "<br>";
echo "The length of $full_name is " . strlen($full_name) . ".<br>";
echo "$full_name backwards is " . ucwords(strtolower(strrev($full_name))) . ".";



