<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/17/2018
 * Time: 6:43 AM
 */

$cereal = [

    ["100%_Bran",		70,	6,	5, "4", 1, 130, 10, 280, 3,0, 0 ,1],
    ["100%_Natural_Bran",	120 ,8,	8, "3", 5, 15, 2, 135, 3,0, 0 ,1],
    ["All-Bran",	70,	5,	7, "4", 1, 260, 9, 320, 3, 0, 0 ,1],
    ["All-Bran_with_Extra_Fiber	",	50,	0,	8, "4", 0, 140, 14, 330, 3,0, 0 ,1],
    ["Almond_Delight",	110,	8,	14, "2", 2, 200, 1, -1, 3, 0, 0 ,1],
    ["Apple_Cinnamon_Cheerios",		110,	10,	10.5, "2", 2, 180, 1.5, 70, 1, 1, 0 ,0],
    ["Apple_Jacks	",	110,	14,	11, "2", 0, 125, 1, 30, 2,0, 1 ,0],
    ["Basic_4	",	130,	8,	18, "3", 2, 210, 2, 100, 3, 0, 0, 1],
    ["Bran_Chex	",	90,	6,	15, "2", 1, 200, 4, 125, 1, 1, 0, 0],
    ["Bran_Flakes",		90,	5,	13, "3", 0, 210, 5, 190, 3, 0, 0 ,1],
    ["Cheerios	",	110,	1,	17, "6", 2, 290, 2, 105, 1, 1, 0 ,0],

];



$cereal = $cereal[array_rand($cereal)];
$total = 2500 / $cereal[1] ;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: peachpuff;
            margin-left: auto;
            font-family: monospace;
            color: darkred;
        }

        .container{
            width: 600px;
            margin: 0 auto;
            padding: 3%;
            background-color: lightgreen;
        }
        h1{
            text-align: center;
        }
        table{
            width: 100%;
            border-spacing: 0px;
        }
        td, th {
            border: 1px solid black;

            text-align: center;
        }
        iframe{
            margin-top: 10%;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        button{
            margin-top: 10%;
            margin-left: 40%;
            background-color: cadetblue;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>What percentage of calories are you eating from your cereal?</h1>
    <table>
        <tr>
            <th>Cereal</th>

            <th>Calories from 2500 diet</th>

        </tr>
        <td><?php echo $cereal[0]; ?></td>
        <td><?php echo  $cereal[1] / $total . "%"; ?></td>

    </table>
    <a href="http://localhost/cis195p/week3/cereal.php"><button type="button">Try New Cereal!</button></a>
    <iframe src="https://giphy.com/embed/3o85xKRIokv92FRo52" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/darkigloo-breakfast-cereal-puppet-3o85xKRIokv92FRo52"></a></p>
</div>
</body>
</html>
