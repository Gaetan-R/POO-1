<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;


$rockrider = new Bicycle();
$rockrider->color = 'yellow';
$rockrider->currentSpeed = 0;

$tornado = new Bicycle();
$tornado->color = 'black';
$tornado->currentSpeed = 0;

$car = new Car();


$tornado->dump();

$bike->dump();

$rockrider->dump();

$car->dump();

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

echo '<br>';
echo '<br>';
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . 'km/h' . '<br>';

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . 'km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

