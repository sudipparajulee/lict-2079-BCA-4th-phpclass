<?php
class simpleInterest{
    var $rate;
    var $duration;
    var $capital;

    function calculate(){
        return ($this->capital * $this->rate * $this->duration) / 100;
    }
}

$calculator = new simpleInterest();
$calculator->rate = 3;
$calculator->duration = 2;
$calculator->capital = 5000;

echo $calculator->calculate();
?>