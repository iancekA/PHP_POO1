<?php

require_once 'Bicycle.php';
$bike = new bicycle('blue');

echo $bike->forward();
$bikeCurrentSpeed = $bike->getCurrentSpeed();
echo '<br> Vitesse du vélo : ' . $bikeCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bikeCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

require_once 'Car.php';
echo nl2br("\n");
$car = new car('Blue',4,'diesel');
echo $car->start();
$car->forward();
echo $car->start();
echo $car->brake();

$car2 = new car('Red',4,'diesel');
echo $car2->start();
$car2->forward();
echo $car2->brake();