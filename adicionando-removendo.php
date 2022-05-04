<?php

$alunos = [
    'João',
    'Lucas',
    'Maria'
];

array_push($alunos, 'José');
$alunos[] = 'Natália';

var_dump($alunos);

array_unshift($alunos, 'Mônica');

var_dump($alunos);

array_shift($alunos);

var_dump($alunos);

array_pop($alunos);

var_dump($alunos);