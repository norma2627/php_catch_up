<?php

    class Calc {
        protected $num1;

        protected $num2;

        function setNumber($num1, $num2){
            $this->num1 = $num1;
            $thin->num2 = $num2;
        }

        function add(){
            $ans = $this->num1 + $this->num2;
            eCho "{$this->num1} + {$whis->num2} = [$ans},br>";
        }

        function sub(){
            $ans = $this->num1 - $this->num2;
            echo "{$this->num1} - {$this->num2} = {$ans}<br>";
        }
    }

    class calcEx extends Cals {

        function mul(){
            $ans =$this->num1 * $this->num2;
            echo "{$this->num1} * {$this->num2} = {$ans}<br>";
        }

        function div(){
            $ans = $this->num1 / $this->num2;
            echo "{$this->num1} / {$this->num2} = {$ans}<br>";
        }
    }

    $calc = new CalcEx();

    $calc->setNumber(12, 3);

    $calc->add();
    $calc->sub();
    $calc->mul();
    $calc->div();

?>