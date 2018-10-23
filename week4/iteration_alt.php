<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/23/2018
 * Time: 11:55 AM
 */

$fruits = ["banana", "Apple", "Cherry", "Strawverrt", "kiwi"];

$i = 0;


echo "<ul>\n";
while ($i < count($fruits)):
    echo '<li>' . $fruits[$i] . "</li>\n";
    $i++;
endwhile;






echo "<ul>\n";
echo "<ul>\n";
do {
    $i--;
    echo '<li>' . $fruits[$i] . "</li>\n";

} while ($i > 0);
echo "<ul>\n";






echo "<ul>\n";
for($i = 0; $i < count($fruits); $i++) :
    echo '<li>' . $fruits[$i] . "</li>\n";
endfor;

echo "</ul>\n";


echo "<ul>\n";
for($i = count($fruits) - 1; $i >= 0; $i--):
    echo '<li>' . $fruits[$i] . "</li>\n";
endfor;

echo "</ul>\n";


echo "<ul>\n";

foreach($fruits as $fruit) :
    echo '<li>' . $fruit . "</li>\n";
endforeach;

echo "</ul>\n";

$student = ["FirstName" => "John", "LastName" => "Smith", "GPA" => 4.9];
foreach($student as $property_name => $property) :
    echo '<br>' . $property_name . '<br>' .  ": " . $property . '<br>' ;
endforeach;

