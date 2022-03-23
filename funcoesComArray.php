<?php

$notas = [
    'João' => 10,
    'Ana' => 8,
    'Luis' => 9,
    'Pedro' => 7
];

$pessoas = [
    'João',
    'Ana',
    'Luis',
    'Pedro'
];

$totalPessoas = count($pessoas);

echo '$notas é um array? ' . PHP_EOL;
var_dump(is_array($notas));
echo '$totalPessoas é um array? ' . PHP_EOL;
var_dump(is_array($totalPessoas));
echo PHP_EOL;

echo '$notas é um array ordenado?' . PHP_EOL;
var_dump(array_is_list($notas));
echo '$pessoas é um array ordenado?' . PHP_EOL;
var_dump(array_is_list($pessoas));

echo "Quantidade de pessoas é $totalPessoas";