<?php
    // EJEMPLO 1.

    $variable = "nombre";
    $$variable = "Mr. Michi";

    echo $nombre;
    
    echo "\n";

    // EJEMPLO 2

    $nombre = "Carlitos";
    $edad = 11;
    $comida_favorita = "Lasaña con berenjena";
    
    $propiedad = readline('Escribe la propiedad del señor usuario: ');
    
    echo $$propiedad;

    echo "\n";
?>