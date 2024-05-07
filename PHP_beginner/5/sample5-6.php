<?php
    function match_zip($zip){
        if (preg_match("/^[0-9]{3}-[0-9]{4}$/", $zip) == 1){
            echo "{$zip}は郵便番号です。<br>";
        }
        else {
            echo "{$zip}は郵便番号ではありません。<br>";
        }
    }

    match_zip("101-0051");
    match_zip("171-0022");
    match_zip("1710033");
    match_zip("03-6925-4822");
?>