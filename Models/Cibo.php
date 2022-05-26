<?php

class Cibo extends Prodotti{
    protected $name;
    protected $marca;

    function __construct(String $tipologiaProdotto, float $prezzo, int $sconto, String $name, String $marca){
        parent:: __construct($tipologiaProdotto, $prezzo, $sconto);
        $this->name=$name;
        $this->marca=$marca;
    }

}


