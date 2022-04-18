<?php

$alunos2021IndiceNumerico = [
    'João',
    'Ana',
    'Luis',
    'Pedro',
    'Lucas'
];

$novosAlunosIndiceNumerico = [
    'Douglas',
    'Fernando',
    'Denzel'
];

$alunos2021IndiceTexto = [
    'A' => 'João',
    'B' => 'Ana',
    'C' => 'Luis',
    'D' => 'Pedro',
    'E' => 'Lucas'
];

$novosAlunosIndiceTexto = [
    'A' => 'Douglas',
    'B' => 'Fernando',
    'F' => 'Denzel'
];

echo "Unindo indice numérico com array_merge" . PHP_EOL;
var_dump(array_merge($alunos2021IndiceNumerico, $novosAlunosIndiceNumerico));

echo "Unindo indice texto com array_merge" . PHP_EOL;
var_dump(array_merge($alunos2021IndiceTexto, $novosAlunosIndiceTexto));

echo "Unindo indice numérico com +" . PHP_EOL;
var_dump($alunos2021IndiceNumerico + $novosAlunosIndiceNumerico);

echo "Unindo indice texto com +" . PHP_EOL;
var_dump($alunos2021IndiceTexto + $novosAlunosIndiceTexto);