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
    if ($nota1['nota'] > $nota2['nota']) {
        return 1;
    }

    if ($nota1['nota'] < $nota2['nota']) {
        return -1;
    }

    return 0;
}

usort($notasCompleto, 'ordenarNotas');

var_dump($notasCompleto);