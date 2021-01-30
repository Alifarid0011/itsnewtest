<?php

class erthbari extends divice
{

}

$erth = new erthbari();
$erth->intro();
switch ($erth) {
    case false:
        echo "ok";
        break;
    case true:
        echo "not ok ";
        break;
    default:
        echo "f";

}