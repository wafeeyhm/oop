<?php

class Cars {

    function greeting(){
        echo "Hello, I am a car!";
    }

    function greeting2(){
        echo "Hello, I am a car!";
    }

}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    # code...
    echo $method . "\n";
}

?>