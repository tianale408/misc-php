<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/23/2018
 * Time: 12:30 PM
 */


$fruits = ["banana", "Apple", "Cherry", "Strawberry", "kiwi"];

echo "<ul>\n";
while ($fruit = current($fruits)) :
    echo '<li>' . $fruit . "</li>\n";
    next($fruits);
endwhile;
echo "</ul>\n";
end($fruits);
echo "<ul>\n";
while ($fruit = current($fruits)) :
    echo '<li>' . $fruit . "</li>\n";
    prev($fruits);
endwhile;
echo "</ul>\n";
$student = ["FirstName" => "John", "LastName" => "Smith", "GPA" => 4.9];

while($property = current($student)) :
    echo '<br>' . key($student) . '</br>' .  ": " . $property . '<br>' ;
    next($student);
endwhile;

end($student);
while($property = current($student)) :
    echo '<br>' . key($student) . '</br>' .  ": " . $property . '<br>' ;
    prev($student);
endwhile;