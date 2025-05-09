<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait  ComAvaliacao
{
    private array $nota = [];


    /**
     * @throws \InvalidArgumentException Se a nota for negativa ou maior que 10
     */
    public function avalia(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }
        $this->nota[] = $nota;

    }

    public function  media(): float {
        $somaNota = array_sum($this->nota);
        $quantidadeNotas = count($this->nota);

        return $somaNota / $quantidadeNotas;
    }
}