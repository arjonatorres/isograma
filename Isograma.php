<?php

/*
 * Esto es sólo un ESQUELETO para el ejercicio de los "isogramas".
 */

function esIsograma(string $s): bool
{
    $s = str_replace(['-', ' '], '', $s);

    for ($i = 0; $i < mb_strlen($s); $i++) {
        if (mb_stripos(mb_substr($s, $i + 1), mb_substr($s, $i, 1)) !== false) {
            return false;
        }
    }
    return true;
}
