<?php
    rewuire_once("car.php");

    $car1 = new Car();
    $car2 = new Car();

    $car1->number = "あ12-34";
    $car1->speed = 50;

    $car1->drive();
    $car1->stop();

    $car2->number = "い56-78";
    $car2->speed = 40;

    $car2->drive();
    $car2->stop();
?>