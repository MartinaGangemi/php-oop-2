<?php

class Prodotti {
    protected $tipologiaProdotto;
    protected $prezzo;
    
    public function __construct(String $tipologiaProdotto, float $prezzo){
        $this->tipologiaProdotto=$tipologiaProdotto;
        $this->prezzo=$prezzo;
    }

    public function setSconto( User $registrazione) {
        if($this->registrazione){
            $this->prezzo * $this->sconto;
        }
    } 

}
