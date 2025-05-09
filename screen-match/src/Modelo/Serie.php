<?php

namespace ScreenMatch\Modelo;

class Serie extends Titulo {
    public function  __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temoporada,
        public readonly int $episodiosTemp,
        public readonly int $minutosPorEp
    ){
        parent::__construct($nome,$anoLancamento,$genero);
    }

    #[\override]
    public function duracaoEmMinutos(): int
    {
        return $this->temoporada * $this->episodiosTemp * $this->minutosPorEp;
    }
}