<?php
require_once "predatory.php";
require_once "herbivore.php";
require_once "omnivores.php"; 

$animal_one = new Predatory('мясо','собака');
$animal_two = new Herbivore('трава','кенгуру');
$animal_three = new Omnivores('корм','белый медведь');

echo $animal_one->diet(4).PHP_EOL;
echo $animal_two->diet(15).PHP_EOL;
echo $animal_three->diet(100).PHP_EOL;