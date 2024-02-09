<?php 

require_once 'sistema/configruacao.php';
include_once 'Helpers.php';

$texto = 'texto para resumir';

echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 50);