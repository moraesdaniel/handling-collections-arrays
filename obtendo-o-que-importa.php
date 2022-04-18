<?php

$notasBimestre1 = [
    'João' => 10,
    'Ana' => 5,
    'Luis' => 9,
    'Pedro' => 7,
    'Lucas' => 8
];

$notasBimestre2 = [
    'Ana' => 5,
    'Luis' => 9,
    'Pedro' => 7
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_combine($nomesAlunos, $notasAlunos));
echo "Array Flip" . PHP_EOL;
var_dump(array_flip($alunosFaltantes));
