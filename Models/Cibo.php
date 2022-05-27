<?php

class Cibo {
    use Prodotti, Quantità;
    protected $marca;

    function __construct(String $nome, String $categoria, float $prezzo, String $marca){
        $this->nome=$nome;
        $this->categoria=$categoria;
        $this->prezzo=$prezzo;
        $this->marca=$marca;
    }

}


