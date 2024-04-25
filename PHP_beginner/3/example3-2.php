<?php
    $temp = 15;

    echo "水の温度{$temp}度<br>";

    if ($temp >= 100){
        echo "水蒸気です。";
    } else if ($temp <= 0){
        echo "氷です。";
    } else {
        echo "水です。";
    }
    
?>