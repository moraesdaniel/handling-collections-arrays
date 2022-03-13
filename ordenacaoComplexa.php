<?php

$notasCompleto = [
    [
        'aluno' => 'Daniel',
        'nota' => 10
    ],
    [
        'aluno' => 'Vinícius',
        'nota' => 9
    ],
    [
        'aluno' => 'Joca',
        'nota' => 7
    ]
];

function ordenarNotas(array $nota1, array $nota2): int {
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($notasCompleto, 'ordenarNotas'); //existe também a uksort

var_dump($notasCompleto);