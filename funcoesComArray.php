<?php

$notas = [
    'João' => 10,
    'Ana' => null,
    'Luis' => 9,
    'Pedro' => 7
];

$pessoas = [
    'João',
    'Ana',
    'Luis',
    'Pedro'
];

$array = [
    'primeiro',
    1 => 'segundo',
    'terceiro'
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
echo '$array é um array ordenado?' . PHP_EOL;
var_dump(array_is_list($array));

echo "Quantidade de pessoas é $totalPessoas";