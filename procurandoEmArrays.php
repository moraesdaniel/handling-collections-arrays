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

$notaDesejada = 10;
if (in_array($notaDesejada, $notas)) { //Aqui existe ainda a opção de utilizar o terceiro parâmetro como true, desta forma faríamos a comparação estrita
    echo "Alguém tirou $notaDesejada :)" . PHP_EOL;
    $aluno = array_search($notaDesejada, $notas);
    echo "Quem tirou $notaDesejada foi $aluno"; //Idem observação acima
} else {
    echo "Ninguém tirou $notaDesejada :(";
}