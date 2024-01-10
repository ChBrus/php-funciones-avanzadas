<?php
    function michi() {
        echo "Meow!";
    }

    function dogo() {
        echo "Woof!";
    }

    function zorro() {
        echo "Zorro, no te lo lleves!";
    }

    $function = readline('Escribe cual función quieres ejecutar: ');

    if (function_exists($function)) {
        $function();
    }

    echo "\n";
?>