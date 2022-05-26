<?php

class Cibo extends Prodotti{
    protected $name;
    protected $marca;

    function __construct(String $tipologiaProdotto, float $prezzo, String $name, String $marca){
        parent:: __construct($tipologiaProdotto, $prezzo);
        $this->name=$name;
        $this->marca=$marca;
    }

}


