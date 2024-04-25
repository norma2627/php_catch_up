<?php
    $a = "PHP";
    $b = "PHP";
    $c = "Hello";

    echo "\$a=$a \$b=$b \$c=$c<br>";

    if ($a == "PHP" and $b = "PHP"){
        echo "$a , $b ともにPHPです。<br>";
    }
    if ($a == "PHP" and $c == "PHP") {
        echo "$a , $c ともにPHPです。<br>";
    }
    if ($a == "PHP" or $b == "PHP"){
        echo "$a , $b いずれかがPHPです。<br>";
    }
    if ($a == "PHP" or $c == "PHP"){
        echo "$a , $c いずれかがPHPです。<br>";
    }
?>