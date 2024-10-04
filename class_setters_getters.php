<?php

class Cars {

    private $color = "white";

    function get_values(){
        return $this->color;
    }

    function set_values(){
        $this->color = "red";
    }

}

$bmw = new Cars();

echo $bmw->get_values();
echo "<br>";
$bmw->set_values();
echo $bmw->get_values();

?>