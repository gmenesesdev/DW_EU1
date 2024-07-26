<?php

namespace App\Models;

class Uf
{
    public static function getUfValue()
    {
        $apiUrl = 'https://mindicador.cl/api';

        if (ini_get('allow_url_fopen')) {
            // Usar file_get_contents si allow_url_fopen está habilitado
            $json = file_get_contents($apiUrl);
        } else {
            // Usar cURL si allow_url_fopen no está habilitado
            $curl = curl_init($apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }

        // Decodificar la respuesta JSON
        $dailyIndicators = json_decode($json);

        // Verificar si la respuesta contiene el valor de la UF
        if (isset($dailyIndicators->uf->valor)) {
            return $dailyIndicators->uf->valor;
        }

        return null;
    }
}
