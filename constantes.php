<?php
    /**
     * Como se puede notar ambas constantes pueden existir al mismo tiempo
     * por el simple hecho del case de los carácteres del nombre.
     * 
     * Pero como buenas prácticas, siempre hay que tener solo una constante
     * y en mayúsculas
     */
    define('MICHI', 'Michu');
    # define('michi', 'Cami');

    const ENVIROMENT = "localhost";

    echo MICHI . "\n";
    echo ENVIROMENT . "\n";

    $option = true;

    if ($option) {
        define("MESSAGE_BLOCK", "Hola mundo, mi nombre es Bruno. y espero se la estén pasando muy bien :D");

        // Esto no se puede en este lugar
        # const MESSAGE_BLOCK = "Hola mundo, mi nombre es Bruno. y espero se la estén pasando muy bien :D";
    }
    
    echo MESSAGE_BLOCK . "\n";

    // CONSTANTES MÁGICAS

    echo PHP_VERSION . "\n";
    echo __LINE__ . "\n";
    echo __FILE__ . "\n";
    echo E_ALL;
    echo "\n";
?>