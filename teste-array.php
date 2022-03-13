<?php

$numeros = [
    0 => 'zero',
    1 => 'um',
    2 => 'dois'
];

echo "Meu array tem " . count($numeros) . " itens." . PHP_EOL;

foreach($numeros as $chave => $valor) {
    echo "Chave: $chave - Valor: $valor" . PHP_EOL;
}