<?php
    class Person{
        private $name;

        private $age;

        private $sex;

        function __construct($name, $age, $sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        function show(){
            echo "{$this->name}({$this->age}歳)性別:{$this->sex}<br>";
        }
    }

    $p1 = new Person("山田", 18, "男");
    $p1 = new Person("佐藤", 16, "男");
    $p3 = new Person("田中", 15, "女");

    $p1->show();
    $p2->show();
    $p3->show();
?>