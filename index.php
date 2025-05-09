<?php

require __DIR__ . "/autoload.php";

use ScreenMatch\Modelo\{
    Filme,
    Genero,
    Serie,
    Episodio
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNota
};

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    'Top Gun - Maverick',
    2022,
    Genero::Acao,
    130
);

$filme->avalia(10);
$filme->avalia(9.9);
$filme->avalia(8.8);
$filme->avalia(9.7);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$Serie = new Serie('Gotham', 2014, Genero::Acao, 5, 22, 45);
$episodio = new Episodio($Serie, 'piloto', 1);

$Serie->avalia(7.0);
$Serie->avalia(8.0);
$Serie->avalia(9.0);

echo $Serie->media() . "\n";


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($Serie);
$duracao = $calculadora->duracao();

echo "Total de minutos: " . $calculadora->duracao() . "\n";

$conversor = new ConversorNota();
echo $conversor->converte($Serie) . "\n";
echo $conversor->converte($filme) . "\n";
