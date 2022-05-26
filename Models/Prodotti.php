<?php

class Prodotti {
    protected $tipologiaProdotto;
    protected $prezzo;
    protected $sconto;


    function __construct(String $tipologiaProdotto, float $prezzo, int $sconto){
        $this->tipologiaProdotto=$tipologiaProdotto;
        $this->prezzo=$prezzo;
        $this->sconto=$sconto;
    }

    
}
