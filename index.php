<?php 

require_once 'sistema/configruacao.php';
include_once 'Helpers.php';

$texto = '<h1>texto<h1> <p>para resumir<p>';

echo resumirTexto($texto, 15);