<?php
    # Arrays como parametros opcional
    function sumar_edades($edades = array(9, 17, 37)) {
        return array_sum($edades);
    }

    echo sumar_edades();

    # Trailling comma
    function multiplicar(
        $n1 = 1,
        $n2 = 2,
        $n3 = 3,
    ) {
        return $n1 * $n2 * $n3;
    }

    echo multiplicar();

    # Recibir clases como parametros (no instancias sino la inicializacion de una(solo php > 8):
    class UnaClaseRandom {}
    class OtraClaseRandom {}

    function receive_a_class($class = new UnaClaseRandom()) {
        return $class::class;
    }

    echo receive_a_class(new OtraClaseRandom());

    echo "\n";
?>