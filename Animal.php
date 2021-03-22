<?php

abstract class Animal {

    protected $nome;
    protected $cor;
    protected $raca;

    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    public function dormir()
    {
        echo "O $this->nome está dormindo. <br />";
    }

    public function comer($_comida)
    {
        echo "$this->nome está comendo $_comida <br />";
    }
}