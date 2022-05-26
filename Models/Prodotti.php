<?php

class Prodotti {
    protected $tipologiaProdotto;
    protected $prezzo;
    protected $sconto = 0;


    public function __construct(String $tipologiaProdotto, float $prezzo){
        $this->tipologiaProdotto=$tipologiaProdotto;
        $this->prezzo=$prezzo;
    }

    public function getSconto(){
        if($registrazione==true){
           return $this->sconto = 20;
        } else{
           return $this->sconto = 0;
        }

    }

    
}
