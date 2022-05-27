<?php

class Prodotti {
    protected $tipologiaProdotto;
    protected $prezzo;
    
    public function __construct(String $tipologiaProdotto, float $prezzo){
        $this->tipologiaProdotto=$tipologiaProdotto;
        $this->prezzo= $prezzo;
    }

    
}
