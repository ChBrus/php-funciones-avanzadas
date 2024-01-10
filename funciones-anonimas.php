<?php
    $numbers = [1, 2, 3, 4];

    $multiplicar = function($current) {
        return $current * 2;
    };

    // $numbers_by_2 = array_map(function($current) {
    //     return $current * 2;
    // }, $numbers);

    $numbers_by_2 = array_map($multiplicar, $numbers);

    var_dump($numbers_by_2);

    echo "\n";
?>