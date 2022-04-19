<?php
echo '<pre>';
require_once 'Bicycle.php';
$bike = new Bicycle("blue", 0);
var_dump($bike);

require_once 'car.php';
$car = new car("red", 4, 3);
var_dump($car);






echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(10). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(10). ' km/h' . '<br>';
echo $bike->brake();

echo $car->forward();
echo '<br> Vitesse du vélo : ' . $car->setCurrentSpeed(20). ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vélo : ' . $car->setCurrentSpeed(20). ' km/h' . '<br>';
echo $car->brake();


$rockrider = new Bicycle("yellow");


$tornado = new Bicycle("black");


$tornado->forward();














echo '<pre>';