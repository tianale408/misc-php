<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/16/2018
 * Time: 3:38 AM
 */

$v1 = NULL;
$v1 = null;

$v2 = is_null($v1);
$v3 = is_null("");

$v4 = isset($v1);
$v5 = isset($v6);

/*
echo '$v1: ' .  gettype($v1) . ", value: '" . $v1 . "'<br>";
echo '$v2: ' .  @gettype($v2) . ", value: '" . @$v2 . "'<br>";
echo '$v3: ' . @gettype($v3) . ", value: '" . @$v3 . "'<br>";
echo '$v4: ' . @gettype($v4) . ", value: '" . @$v4 . "'<br>";
echo '$v5: ' . @gettype($v5) . ", value: '" . @$v5 . "'<br>";
*/


$a1 = NULL;
$a2 = "";
$a3 = 0;
$a4 = TRUE;
$a5 = FALSE;
$a6 = "Fred";
$a7 = 1;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td {
        border: 1px solid black;
    }

    </style>
</head>
<body>
<table>
    <tr>
        <th>Variable</th>
        <th>Type</th>
        <th>Value</th>
        <th>is_null</th>
        <th>isset</th>
        <th>empty</th>
    </tr>
    <tr>
        <td>$a1</td>
        <td><?php echo gettype($a1); ?></td>
        <td><? php echo $a1; ?></td>
        <td><? php echo is_null($a1); ?></td>
        <td><? php echo isset($a1); ?></td>
        <td><? php echo empty($a1); ?></td>
    </tr>
    <tr>
        <td>$a2</td>
        <td><?php echo gettype($a2); ?></td>
        <td><? php echo $a2; ?></td>
        <td><? php echo is_null($a2); ?></td>
        <td><? php echo isset($a2); ?></td>
        <td><? php echo empty($a2); ?></td>
    </tr>
    <tr>
        <td>$a3</td>
        <td><?php echo gettype($a3); ?></td>
        <td><? php echo $a3; ?></td>
        <td><? php echo is_null($a3); ?></td>
        <td><? php echo isset($a3); ?></td>
        <td><? php echo empty($a3); ?></td>
    </tr>
    <tr>
        <td>$a4</td>
        <td><?php echo gettype($a4); ?></td>
        <td><? php echo $a4; ?></td>
        <td><? php echo is_null($a4); ?></td>
        <td><? php echo isset($a4); ?></td>
        <td><? php echo empty($a4); ?></td>
    </tr>
    <tr>
        <td>$a5</td>
        <td><?php echo gettype($a5); ?></td>
        <td><? php echo $a5; ?></td>
        <td><? php echo is_null($a5); ?></td>
        <td><? php echo isset($a5); ?></td>
        <td><? php echo empty($a5); ?></td>
    </tr>
    <tr>
        <td>$a6</td>
        <td><?php echo gettype($a6); ?></td>
        <td><? php echo $a6; ?></td>
        <td><? php echo is_null($a6); ?></td>
        <td><? php echo isset($a6); ?></td>
        <td><? php echo empty($a6); ?></td>
    </tr>
    <tr>
        <td>$a7</td>
        <td><?php echo gettype($a7); ?></td>
        <td><? php echo $a7; ?></td>
        <td><? php echo is_null($a7); ?></td>
        <td><? php echo isset($a7); ?></td>
        <td><? php echo empty($a7); ?></td>
    </tr>
    <tr>
        <td>$a8</td>
        <td><?php echo @gettype($a8); ?></td>
        <td><? php echo @$a8; ?></td>
        <td><? php echo @is_null($a8); ?></td>
        <td><? php echo @isset($a8); ?></td>
        <td><? php echo @empty($a8); ?></td>
    </tr>
</table>
<?php
echo '1 == true: ' . (1 == TRUE) . '<br>';
echo '1 === true: ' . (1 === TRUE) . '<br>';
echo '0 == false: ' . (0 == FALSE) . '<br>';
echo '0 === false: ' . (0 === FALSE) . '<br>';
echo '1 != true: ' . (1 != TRUE) . '<br>';
echo '1 !== true: ' . (1 !== TRUE) . '<br>';
echo '0 != false: ' . (0 != FALSE) . '<br>';
echo '0 !== false: ' . (0 !== FALSE) . '<br>';

$a_bool = TRUE;
$b_bool = FALSE;

echo '$a_bool: ' . $a_bool . '<br>';
echo '$b_bool: ' . $b_bool . '<br>';

echo '$a_bool && $b_bool: ' . ($a_bool && $b_bool) . '<br>';
echo '$a_bool || $b_bool: ' . ($a_bool || $b_bool) . '<br>';
echo '$a_bool and $b_bool: ' . ($a_bool and $b_bool) . '<br>';
echo '$a_bool or $b_bool: ' . ($a_bool or $b_bool) . '<br>';
echo '!$a_bool && !$b_bool: ' . (!$a_bool && !$b_bool) . '<br>';
echo '!$a_bool || !$b_bool: ' . (!$a_bool || !$b_bool) . '<br>';
echo '!$a_bool and !$b_bool: ' . (!$a_bool and !$b_bool) . '<br>';
echo '!$a_bool or !$b_bool: ' . (!$a_bool or !$b_bool) . '<br>';

$answer = 'Y';
echo '$answer == "y" || $answer =="y:" ' . ($answer == "y" || $answer =="y") . '<br>' ;


$answer = 'N';
echo '$answer == "y" || $answer =="y:" ' . ($answer == "y" || $answer =="y") . '<br>' ;

(($answer == "y" || $answer =="y")? "Yes" : "No");

echo (($answer == "y" || $answer =="y")? "Yes" : "No") . '<br>';
$answer = 'Y';

$a_string = "3.1415";
$a_number = (int) $a_string;
echo "A number of type " . gettype($a_number) . " with value " . $a_number . "<br>";

$a_float = (float) $a_string;
echo "A number of type " . gettype($a_float) . " with value " . $a_float . "<br>";
$a_new_string = (string) $a_float;
echo "A number of type " . gettype($a_new_string) . " with value " . $a_new_string . "<br>";

settype($a_number, "string");
echo "A number of type " . gettype($a_number) . " with value " . $a_number . "<br>";
settype($a_number, "float");
echo "A number of type " . gettype($a_number) . " with value " . $a_number . "<br>";

echo '0 == NULL: ' . (0 == NULL?"TRUE": "FALSE") . '<br>';
echo '"0" == NULL: ' . ("0" == NULL?"TRUE": "FALSE") . '<br>';
echo '0 == "0": ' . (0 == "0"?"TRUE": "FALSE") . '<br>';

?>
</body>
</html>
