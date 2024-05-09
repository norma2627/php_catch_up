<?php

    abstract class AbsList{
        
        abstract function startList();

        abstract function endList();

        function show($array) {
            $this->startlist();
            foreach ($array as &$value) {
                echo "<li>" . $value . "</li>\n"; 
            }
            $this->endList();
        }


    }

?>