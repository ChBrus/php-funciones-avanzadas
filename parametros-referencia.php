<?php
    $cat = "Meow!";

    # Vamos a hacer a un gato ladrar
    function make_a_cat_bark(&$cat_dog) {
        $cat_dog = "Woof!";
    }

    make_a_cat_bark($cat);

    echo $cat;

    echo "\n";
?>