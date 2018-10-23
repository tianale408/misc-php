<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/16/2018
 * Time: 12:55 PM
 */

define("FIRST", "User First Name");
define("LAST", "Last Name");
define("POINTS", "Points");
/*
$name = array("Tiana", "Bill", "Mary", "Linda", "Michele", "George", "John");

echo "First Name: " . $name[0] . "<br>";
echo "First Name: " . $name[1] . "<br>";
echo "First Name: " . $name[2] . "<br>";
echo "First Name: " . $name[3] . "<br>";
echo "First Name: " . $name[4] . "<br>";
echo "First Name: " . $name[5] . "<br>";
echo "First Name: " . $name[6] . "<br>";

$name[] = "William";
$name[] = "Alice";

echo "First Name: " . $name[7] . "<br>";
echo "First Name: " . $name[8] . "<br>";

$account_info = array(FIRST => "Marc", LAST => "Goodman", POINTS => 100);

echo "First Name: " . $account_info[FIRST] . '<br>';
echo "Last Name: " . $account_info[LAST] . '<br>';
echo "Points: " . $account_info[POINTS] . '<br>';

$class_roster = array(
    array(FIRST => "Marc", LAST => "Goodman", POINTS => 100),
    array(FIRST => "Bill", LAST => "Jones", POINTS => 95),
    array(FIRST => "Liz", LAST => "Brown", POINTS => 120),
    array(FIRST => "Lee", LAST => "Kim", POINTS => 50),
    array(FIRST => "Mary", LAST => "Jayne", POINTS => 80),
);
*/
$class_roster = [
    [FIRST => "Marc", LAST => "Goodman", POINTS => 100],
    [FIRST => "Bill", LAST => "Jones", POINTS => 95],
    [FIRST => "Liz", LAST => "Brown", POINTS => 120],
    [FIRST => "Lee", LAST => "Kim", POINTS => 50],
    [FIRST => "Mary", LAST => "Jayne", POINTS => 80],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Roster</title>
    <style>
        td, th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th><?php echo FIRST; ?></th>
        <th><?php echo LAST; ?></th>
        <th><?php echo POINTS; ?></th>
    </tr>
    <tr>
        <td><?php echo $class_roster[0][FIRST]; ?></td>
        <td><?php echo $class_roster[0][LAST]; ?></td>
        <td><?php echo $class_roster[0][POINTS]; ?></td>
    </tr>
    <tr>
        <td><?php echo $class_roster[1][FIRST]; ?></td>
        <td><?php echo $class_roster[1][LAST]; ?></td>
        <td><?php echo $class_roster[1][POINTS]; ?></td>
    </tr>
    <tr>
        <td><?php echo $class_roster[2][FIRST]; ?></td>
        <td><?php echo $class_roster[2][LAST]; ?></td>
        <td><?php echo $class_roster[2][POINTS]; ?></td>
    </tr>
    <tr>
        <td><?php echo $class_roster[3][FIRST]; ?></td>
        <td><?php echo $class_roster[3][LAST]; ?></td>
        <td><?php echo $class_roster[3][POINTS]; ?></td>
    </tr>
</table>
<?php print_r(array_column($class_roster, POINTS)); ?><br>
<?php echo array_sum(array_column($class_roster, POINTS)) / count($class_roster) . "<br>";
print_r(range(1, 10)) . "<br>";
    echo array_product(range(1, 10));
    $a1 = ["apple", "cherry", "banana", "grape", "watermelon"];
    $a2 = ["Cherry", "grape", "strawberry"];
    print_r(array_diff($a1, $a2));
    echo "<br>";
    print_r(array_intersect($a1, $a2));
?>
</body>
</html>
