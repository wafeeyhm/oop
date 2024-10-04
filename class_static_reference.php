<?php

class Cars {

    static $wheels = 4;
    static $color = "white";

    static function car_detail(){

        $wheels = self::$wheels;
        $color = self::$color;

        $message = "The colour is " . $color . "and it has " . $wheels . "\nwheels";

        return $message;
    }

}

class Trucks extends Cars{

    static function display(){
        echo parent::car_detail();
    }

}

Trucks::display();

?>