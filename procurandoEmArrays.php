<?php

$notas = [
    'João' => 10,
    'Ana' => 5,
    'Luis' => 9,
    'Pedro' => 7,
    'Lucas' => null
];

if (array_key_exists('Ana', $notas)) {
    echo 'Ana está na lista de provas!' . PHP_EOL;
}

if (isset($notas['Ana'])) {
    echo 'Ana está na lista de provas e tem nota' . PHP_EOL;
}

if (isset($notas['Lucas'])) {
    echo 'Lucas existe' . PHP_EOL;
} else {
    echo 'Lucas não existe ou não tem nota' . PHP_EOL;
}