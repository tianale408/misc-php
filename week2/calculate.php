<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/11/2018
 * Time: 12:08 PM
 */



$diameter = $_GET['diameter'];
$depth = $_GET['depth'];

$radius = $diameter / 2;
$volume = pi() * pow($radius, 2) * $depth;
$gallons = $volume * 7.48052;

?>

<!DOCTYPE html>
<html>
    <head><title>Swimming Pool Calculator</title>
    <style>

        body {
            background-color: aquamarine;
            margin-left: auto;
            font-family: monospace;
            color: purple;
        }

        .container{
            width: 400px;
            margin: 0 auto;
            padding: 3%;
            background-color: #66ffff;
        }

    </style>
    </head>
    <body>
    <div class="container">
    <h1>Swimming Pool Calculator</h1>
    <p>The volume of a swimming pool that is <?php echo $diameter; ?>'
        in diameter and <?php echo $depth; ?>' deep is <?php echo number_format($gallons, 1); ?> gallons. </p>

    </div>
    </body>

</html>

