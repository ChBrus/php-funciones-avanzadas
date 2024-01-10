<?php
    function get_country_name_switch($country) {
        $country = strtoupper($country);
        $name = "";

        switch ($country) {
            case 'MX':
                $name = 'México';
                break;
            case 'COL':
                $name = 'Colombia';
                break;
            case 'EUA':
                $name = 'Estados Unidos Americanos';
                break;
            default:
                $name = 'Lo siento, no conozco ese país';
                break;
        }

        return $name;
    }

    function get_country_name_match($country) {
        $country = strtoupper($country);

        return match($country) {
            'MX' => 'México',
            'COL' => 'Colombia',
            'EUA' => 'Estados Unidos Americanos',
            default => 'Lo siento, no conozco ese país'
        };
    }

    echo get_country_name_match(readline('Inserte el país: '));

    echo "\n";