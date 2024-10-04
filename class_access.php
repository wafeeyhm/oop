<?php

class Cars {

    public $wheels = 4;
    private $color = "white";
    protected $seat_count = 2;

    function car_detail(){
        echo $this->wheels;
        echo $this->color;
        echo $this->seat_count;
    }

}

$bmw = new Cars();

echo $bmw->wheels;
echo $bmw->car_detail();

?>