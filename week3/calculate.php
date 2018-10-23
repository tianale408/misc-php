<?php
/**
 * Created by PhpStorm.
 * User: tiana
 * Date: 10/16/2018
 * Time: 4:46 AM
 */
$ohms = isset($_GET["ohms"])?(float) $_GET['ohms']:0.0;

echo "$ohms is type " . gettype($ohms) . " with value " . $ohms . "<br>";