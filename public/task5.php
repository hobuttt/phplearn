<?php
    $city1 = 10;
    $city2 = 50;
    $city1Radius = 7;
    $city2Radius = 11;
    $pointSCity1 = $city1 - $city1Radius;
    $pointNCity1 = $city1 + $city1Radius;
    $pointSCity2 = $city2 - $city1Radius;
    $pointNCity2 = $city2 + $city1Radius;
    for ($i = 0; $i < 10; $i++) {
        $car = rand(0, 100);
        $speed = ($car < $pointSCity1 && $car > $pointNCity1) || ($car < $pointSCity2 && $car > $pointNCity2) ? 90 : 70;
        echo "Машина 4 едет по городу на $car км со скоростью $speed <br />";
    }
