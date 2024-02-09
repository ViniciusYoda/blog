<?php

function saudacao(): string {
    $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'bom tarde';
    }
    return $saudacao = 'boa noite';
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string {
    return $texto;
}