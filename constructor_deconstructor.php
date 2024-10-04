<?php

class Cars {

    public $wheels = 4;

    static $door = 4;

    function __construct(){
        echo $this->wheels;
        echo self::$door++;
    }

    function __desctruct(){
        echo self::$door--;
    }

}

$bmw = new Cars();
echo "<br>";
$audi = new Cars();

?>