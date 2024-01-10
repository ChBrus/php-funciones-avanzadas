<?php
    $outside_variable = "Esto es una variable global";

    function my_function() {
        global $outside_variable;

        echo $outside_variable;

        /**
         * Gracias a global, podemos usar la variable $outside_variable
         * dentro de esta función
         */
    }

    echo $outside_variable;

    my_function();

    print_r($GLOBALS);

    echo "\n";
?>