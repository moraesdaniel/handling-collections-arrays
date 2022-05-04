<?php

$dadosAluno = ['Leonardo', 10, 35];

list($nome, $nota, $idade) = $dadosAluno; //Other sintax [$nome, $nota, $idade] = $dadosAluno;

var_dump($nome, $nota, $idade);

$dadosSegundoAluno = [
    "nome" => "Daniel",
    "idade" => 35,
    "nota" => 8
];

["nome" => $segundoNome, "idade" => $segundaIdade, "nota" => $segundaNota] = $dadosSegundoAluno;

var_dump($segundoNome, $segundaIdade, $segundaNota);