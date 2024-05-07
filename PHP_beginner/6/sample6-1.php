<?php
    require_once("car.php");

    $caar = new Car();

    $car->number = "12-34";
    $car->speed = 50;

    $car->drive();
    $car->stop();
?>