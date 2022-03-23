<?php

$notas = [
    'João' => 10,
    'Ana' => 8,
    'Luis' => 9,
    'Pedro' => 7
];

echo "Notas:" . PHP_EOL;
var_dump($notas);

echo "Notas ordenadas crescente:" . PHP_EOL;
$notasCrescente = $notas;
sort($notasCrescente);
var_dump($notasCrescente);

echo "Notas ordenadas decrescente:" . PHP_EOL;
$notasDecrescente = $notas;
rsort($notasDecrescente);
var_dump($notasDecrescente);

echo "Notas ordenadas crescente mantendo chaves:" . PHP_EOL;
$notasCrescenteComChaves = $notas;
asort($notasCrescenteComChaves);
var_dump($notasCrescenteComChaves);

echo "Notas ordenadas decrescente mantendo chaves:" . PHP_EOL;
$notasDecrescenteComChaves = $notas;
arsort($notasDecrescenteComChaves);
var_dump($notasDecrescenteComChaves);

echo "Notas ordenadas pelo nome do aluno (chave):" . PHP_EOL;
$notasOrdemAlfabetica = $notas;
ksort($notasOrdemAlfabetica); //Existe também a krsort
var_dump($notasOrdemAlfabetica);

if (is_array($notas)) {
    echo "Sim, é um array";
} else {
    echo "Não, não é um array";
}