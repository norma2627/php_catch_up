<?php

    class City {

        private $name;

        private $prefecture;

        function setname($name) {
            $this->name = $name;
        }
        function setPrefecture($prefecture) {
            $this->prefecture = $prefecture;
        }
        function getPrefecture() {
            return $this->prefecture;
        }
    }

    $c = new City();

    $c->setName("横浜市");
    $c->setPrefecture("神奈川県");

    echo "{$c->getName()}は{$c->getPrefecture()}にあります。<br>";
?>