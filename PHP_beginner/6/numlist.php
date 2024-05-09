<?php

require_once("abslist.php");

class NumList extends AbsList {
    function startLsit() {
        echo "<ol>\n";
    }

    function endList() {
        echo "</ol>\n";
    }

}

?>