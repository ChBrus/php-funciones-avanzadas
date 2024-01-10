<?php
    $piedra = [
        'nombre' => 'Piedra',
        'dureza' => 'alta',
        'ventajas' => 'tijeras',
        'desventajas' => 'papel'
    ];

    $papel = [
        'nombre' => 'Papel',
        'dureza' => 'baja',
        'ventajas' => 'piedra',
        'desventajas' => 'tijeras'
    ];

    $tijeras = [
        'nombre' => 'Tijeras',
        'dureza' => 'media',
        'ventajas' => 'papel',
        'desventajas' => 'piedra'
    ];

    $opcion = readline(
        "Elije una de las siguientes opciones:\n" .
        "  1 - piedra\n" .
        "  2 - papel\n" .
        "  3 - tijeras\n" .
        "Elección:"
    );

    switch($opcion) {
        case 1:
            $usuario = 'piedra';
        break;
        case 2:
            $usuario = 'papel';
        break;
        case 3:
            $usuario = 'tijeras';
        break;
        default:
            die('Opción incorrecta');
    }

    var_dump($$usuario);
?>