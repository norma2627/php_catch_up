<?php
    $values = ["abc". "1", "0", "123", "1.23", "-12", "a2"];

    foreach($values as $values){
        if (preg_match("/^[0-9]{3}-[0-9]{4}$/", $zip) == 1){
            echo "{$zip}は郵便番号です。<br>";
        }
        else{
            echo "{$zip}は郵便番号ではありません。<br>";
        }
    }

    match_zip("101-3355");
    match_zip("183-0044");
    match_zip("1710022");
    match_zip("03-9583-6900");
?>