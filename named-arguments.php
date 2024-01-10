<?php
    function get_person_info($name, $age, $country) {
        return "Tengo la información de {$name}, tiene {$age} años y vive en {$country}";
    }

    /**
     * Con named-arguments podemos pasar los argumentos por el orden que queramos
     */
    echo get_person_info(
        age: 23,
        country: 'Chanchilandia',
        name: 'Chanchito feliz'
    );

    echo "\n";
?>