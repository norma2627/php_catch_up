<?php
    $a = 1;
    echo "$aの値による処理の分岐<br>";

    switch($a){
        case 1:
            echo "$aの値は1です。";
            break;
        case 2:
            echo "$aの値は2です。";
            break;
        case 3:
            echo "$aの値は3です。";
            break;
        default:
            echo "$aの値は1,2,3以外の値です。";
    }
?>