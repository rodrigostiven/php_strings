<?php

namespace String;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        $nomeSobrenome = explode(" ", $nome, 2);

        if($nomeSobrenome[0] === " ") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Nome inválido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
}