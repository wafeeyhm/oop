<?php

class Cars {

    static $wheels = 4;
    static $color = "white";

    static function car_detail(){
        echo Cars::$wheels;
        echo Cars::$color;
    }

}

$bmw = new Cars();

//echo $bmw->wheels;
//echo "<br>";
echo Cars::$color;
echo "<br>";
echo Cars::car_detail();

?>