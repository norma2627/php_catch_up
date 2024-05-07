<?php
    function job($syokugyo = "会社員"){
        return "職業は{$syokugyo}です。<br>";
    }

    echo job("公務員");
    echo job();  
?>