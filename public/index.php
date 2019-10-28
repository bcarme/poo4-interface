<?php
require __DIR__ .'/../vendor/autoload.php';


$mustang = new \App\Car("black", 2, "gas");
$rockrider = new \App\Bicycle('Brown', 1);
$skate22 = new \App\Skateboard('Yellow', 0);

$mustang->switchOff();
$mustang->switchOn();
$rockrider->setCurrentSpeed(15);
$rockrider->switchOn();
$rockrider->switchOff();







