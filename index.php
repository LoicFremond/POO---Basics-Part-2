<?php

require 'Cars.php';
require 'Bicycle.php';
require 'Trucks.php';

$bike = new Bicycle("yellow",2);
$bike->currentSpeed = 10;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();




$flandersGeo = new Cars("bleue", 4,'essence');
$flandersGeo->currentSpeed = 60;
$flandersGeo->color = "bleue";
$flandersGeo->nbSeat = 4;
$flandersGeo->energy ="essence";
echo '<br><br><br>';
echo '<br> La voiture de Flander est '.$flandersGeo->color.' à ' .$flandersGeo->nbSeat. ' places et roule à l\''.$flandersGeo->energy.'.<br>';
echo $flandersGeo->start();
echo $flandersGeo->forward();
echo '<br> Vitesse du véhicule est de ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $flandersGeo->brake();
echo '<br> Vitesse de la voiture : ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();



$truck = new Trucks(150, 'black', 3, 'fuel');
$truck->currentSpeed = 100;
echo '<br><br><br>';
echo $truck->forward();
echo '<br> la vitesse du camion est de ' .$truck->currentSpeed. ' km/h' . '<br>';
echo $truck->brake();
echo '<br> la vitesse du camion est de ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo $truck->content();