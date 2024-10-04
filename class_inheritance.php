<?php

class Cars {

    var $wheels = 4;

    function greeting(){
        return "Hello, I am a car!";
    }

}

$bmw = new Cars();

class Trucks extends Cars {

}

$toyota = new Trucks();

echo $toyota->wheels;

?>