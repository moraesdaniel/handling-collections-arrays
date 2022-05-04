<?php

$dadosAluno = [
    "nome" => "Daniel",
    "idade" => 35,
    "nota" => 8
];

extract($dadosAluno);

var_dump($nome, $idade, $nota);

var_dump(compact('nome', 'idade', 'nota'));