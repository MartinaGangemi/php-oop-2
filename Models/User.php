<?php

class User {
    protected $nomeUtente;
    protected $numeroCarta;
    protected $cartaScaduta;
    protected $registrazione;


    function __construct(String $nomeUtente, int $numeroCarta, bool $cartaScaduta, bool $registrazione){
        $this->nomeUtente=$nomeUtente;
        $this->numeroCarta=$numeroCarta;
        $this->cartaScaduta=$cartaScaduta;
        $this->registrazione=$registrazione;
    }

    
}