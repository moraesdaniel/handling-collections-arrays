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
    'Pedro' => 7,
    'Lucas' => 10
];

$notasQueNaoSeRepetem = array_diff($notasBimestre1, $notasBimestre2);
echo "Notas que não se repetem:" . PHP_EOL;
var_dump($notasQueNaoSeRepetem);

$alunosQueNaoSeRepetem = array_diff_key($notasBimestre1, $notasBimestre2);
echo "Alunos que não se repetem:" . PHP_EOL;
var_dump($alunosQueNaoSeRepetem);

$alunosENotasQueNaoSeRepetem = array_diff_assoc($notasBimestre1, $notasBimestre2);
echo "Alunos e notas que não se repetem:" . PHP_EOL;
var_dump($alunosENotasQueNaoSeRepetem);